<?php $categoriesNames = \App\Http\Controllers\ClientControllerHelper::getCategories();
?>
<div class="slds-scope">
    <div class="demo-only section" id="categories" style="width: 296px; background-color: rgb(250, 250, 251);    margin-top: -33px; display: none;">
        <nav class="slds-nav-vertical slds-nav-vertical_shade" aria-label="Sub page">
            <div class="slds-nav-vertical__section">
                <h2 id="entity-header" class="slds-nav-vertical__title slds-text-title_caps">Catgeories</h2>
                <ul>
                    @foreach($categoriesNames as $key=>$value)
                    <li id="{{$value->category}}li" class="slds-nav-vertical__item slds-is-active languageItem"><a href="javascript:void(0);"
                                                                                      onclick="showCategory('{{$value->category}}');"
                                                                                      class="slds-nav-vertical__action"
                                                                                      aria-describedby="entity-header"
                                                                                      aria-current="page">{{$value->category}}</a>
                    </li>
                    @endforeach
                </ul>
            </div>
        </nav>
    </div>
</div>