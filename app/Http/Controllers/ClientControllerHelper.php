<?php
/**
 * Created by PhpStorm.
 * User: Kevin
 * Date: 2/14/2018
 * Time: 2:56 PM
 */

namespace App\Http\Controllers;

use Hash;
use Illuminate\Http\Request;
use DB;

class ClientControllerHelper extends Controller {

    static $currentQuestionID = '0';

    public static function setQuestionID($id) {
        ClientControllerHelper::$currentQuestionID = $id;
    }

    public static function getUserDataFromDB($arg) {
        if (session()->has('username')) {
            $username = session()->get('username');

            $result = DB::select('select ' . $arg . ' from user where user.username = \'' . $username . '\'');

            if (!empty($result))
                $result = $result[0];

            foreach ($result as $key => $value) {
                $arg = $value;
            }
            return $arg;
        }
        return 'N/A';
    }

    public static function getQuestionDataFromDBForCurrentUser($arg) {
        if (session()->has('username')) {
            $username = session()->get('username');

            $result = DB::select('select ' . $arg . ' from question q inner join user u on q.user_ID1 = u.user_ID where u.username = \'' . $username . '\'');

            if (!empty($result))
                $result = $result[0];

            foreach ($result as $key => $value) {
                $arg = $value;
            }
            return $arg;
        }
        return 'N/A';
    }

    public static function checkUpvotes($id) {
        $vote = DB::select('
            SELECT 
                vote
            FROM questionvote v
            INNER JOIN user u
            INNER JOIN question q
                ON v.user_ID4 = u.user_ID AND v.question_ID3 = q.question_ID
            WHERE u.username = \'' . session()->get('username') . '\' AND v.question_ID3 = \'' . $id . '\'');
        if ($vote == null) {
            return 'default';
        } else if ($vote[0]->vote == 1) {
            return 'warning';
        } else {
            return 'light';
        }
    }

    public static function checkDownvotes($id) {
        $vote = DB::select('
            SELECT 
                vote
            FROM questionvote v
            INNER JOIN user u
            INNER JOIN question q
                ON v.user_ID4 = u.user_ID AND v.question_ID3 = q.question_ID
            WHERE u.username = \'' . session()->get('username') . '\' AND v.question_ID3 = \'' . $id . '\'');
        if ($vote == null) {
            return 'default';
        } else if ($vote[0]->vote == 0) {
            return 'error';
        } else {
            return 'light';
        }
    }

    public static function checkUpvotesA($id) {
        $vote = DB::select('
            SELECT 
                vote
            FROM answervote v
            INNER JOIN user u
            INNER JOIN answer a
                ON v.user_ID5 = u.user_ID AND v.answer_ID1 = a.answer_ID
            WHERE u.username = \'' . session()->get('username') . '\' AND v.answer_ID1 = \'' . $id . '\'');
        if ($vote == null) {
            return 'default';
        } else if ($vote[0]->vote == 1) {
            return 'warning';
        } else {
            return 'light';
        }
    }

    public static function checkDownvotesA($id) {
        $vote = DB::select('
            SELECT 
                vote
            FROM answervote v
            INNER JOIN user u
            INNER JOIN answer a
                ON v.user_ID5 = u.user_ID AND v.answer_ID1 = a.answer_ID
            WHERE u.username = \'' . session()->get('username') . '\' AND v.answer_ID1 = \'' . $id . '\'');
        if ($vote == null) {
            return 'default';
        } else if ($vote[0]->vote == 0) {
            return 'error';
        } else {
            return 'light';
        }
    }

    public static function getQuestionDataFromDBForCurrentQuestion($arg, $id) {
        if (session()->has('username')) {
            $username = session()->get('username');

            $result = DB::select('select ' . $arg . ' from question q inner join user u on q.user_ID1 = u.user_ID where u.username = \'' . $username . '\' 
             AND q.question_ID = \'' . $id . '\'');

            if (!empty($result))
                $result = $result[0];

            foreach ($result as $key => $value) {
                $arg = $value;
            }
            return $arg;
        }
        return 'N/A';
    }

    public static function getCategoryName($id) {
        if (session()->has('username')) {
            if ($id == '0' || $id == null) {
                return;
            }
            $id2 = ClientControllerHelper::getQuestionDataFromDBForCurrentQuestion('category_ID1', $id);
            $result = DB::select('select category from category where category.category_ID = \'' . $id2 . '\'');
            if ($result != null) {
                return $result[0]->category;
            }
        }
        return;
    }

    public static function getRank($user){
        if(session()->has('username')){
            $rank = DB::select('
            SELECT
                *
            FROM user u order by u.rank DESC');
            $myRank = 0;
            foreach ($rank as $key=>$value){
                $myRank++;
                if ($value->username == $user){
                    break;
                }
            }
            return $myRank;
        } else {
            return '0';
        }

  }

  public static function getTopQuestionsByUpvotes($language) {
        $post = DB::select('select * from question q inner join category t on q.category_ID1 = t.category_ID 
                      where t.category = \'' . $language . '\' order by q.upvotes DESC');
        return $post;
    }


    public static function getCategories() {
        $categories = DB::select('select category from category order by category.category_ID ASC');
        return $categories;

    }

    public static function getPostsByCategoryNameQuery($category) {
        $category_ID = DB::select('select category_ID from category where category.category = \'' . $category . '\' order by category.category_ID ASC')[0]->category_ID;
        $post = DB::select('
            SELECT
                q.question_ID,
                q.title,
                q.content,
                q.category_ID1,
                q.user_ID1 as userID,
                q.create_time,
                q.upvotes,
                q.comments,
                q.views,
                u.username
            FROM question q
            INNER JOIN user u
                ON q.user_ID1 = u.user_ID AND q.category_ID1 = \'' . $category_ID . '\' AND q.is_hidden = 0
            ORDER BY q.question_ID DESC
        ');

        return $post;
    }

    public static function getCategoryById($id) {
        $category = DB::select('select category from category where category.category_ID = ' . $id);
        return $category;

    }

    public static function getFavourites() {
        $favourites = DB::select('
            SELECT
                q.question_ID,
                q.title,
                q.content,
                q.category_ID1,
                q.user_ID1 as userID,
                q.create_time,
                q.upvotes,
                q.comments,
                q.views,
                u.username
            FROM question q
            INNER JOIN user u ON q.user_ID1 = u.user_ID
            INNER JOIN favourite ON q.question_ID = favourite.question_ID2 AND q.is_hidden = 0
            WHERE user_ID3 = ' . session()->get('id') . ';');

        return $favourites;
    }

    public static function sendNotification($uid, $fromUID, $url, $notificationType, $content, $pid) {
        try {
            if (session()->has('id')) {
                return DB::table('notification')->insert(
                    array(
                        "uid" => $uid,
                        "fromUID" => $fromUID,
                        "url" => $url,
                        "notificationType" => $notificationType,
                        "content" => $content,
                        "pid" => $pid
                    )
                );
            }
        } catch (\Illuminate\Database\QueryException $ex) {
            return redirect('/')->withErrors($ex);
        }
    }

    public static function getNotifications($limit) {
        $notifications = DB::select('
                SELECT
                    n.id,
                    n.uid,
                    n.fromUID,
                    n.url,
                    n.notificationType,
                    n.content,
                    n.read,
                    n.time,
                    u.username
                FROM notification n
                INNER JOIN user u
                    ON n.fromUID = u.user_ID
                WHERE n.uid = ' . Session()->get('id') . '
                ORDER BY n.id DESC
                LIMIT ' . $limit . '
            ');
        return $notifications;
    }

    public static function getAllNotifications() {
        $notifications = DB::select('
                SELECT
                    n.id,
                    n.uid,
                    n.fromUID,
                    n.url,
                    n.notificationType,
                    n.content,
                    n.read,
                    n.time,
                    u.username
                FROM notification n
                INNER JOIN user u
                    ON n.fromUID = u.user_ID
                WHERE n.uid = ' . Session()->get('id') . '
                ORDER BY n.id DESC
            ');
        return $notifications;
    }

    public static function getNotificationTitle($notificationType) {
        switch($notificationType) {
            case 1:
                return 'commented on your post.';
                break;
            case 2:
                return 'added your post to his favorite list.';
                break;
            case 3:
                return "replied on a post you've commented on.";
                break;
            case 4:
                return "marked your answer as the best answer.";
                break;
            default:
                break;
        }
    }
}