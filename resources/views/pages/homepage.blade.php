@include('includes.head')
@include('includes.headerfooter')
<body>
  <div class="slds-scope">

			<div>
				
               @include('includes.leftmenu')
                <?php $categoriesNames = \App\Http\Controllers\ClientControllerHelper::getCategories();
                        $categories = array();
                        foreach ($categoriesNames as $key=>$value){
                            $categories = array_add($categories, $value->category, \App\Http\Controllers\ClientControllerHelper::getPostsByCategoryNameQuery($value->category));
                        }
                ?>

                @foreach($categories as $language=>$posts)
                    @include('pages.category', ['language'=>$language, 'posts'=>$posts])

                @endforeach
            </div>
  </div>
</body>
@include('includes.modals');