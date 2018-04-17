<?php
$categoriesNames = \App\Http\Controllers\ClientControllerHelper::getCategories();
?>
<div class="slds-scope" style="width: 100%; position: absolute;">
    <div class="demo-only section" id="categories" style="position: absolute;">
        <nav class="slds-nav-vertical slds-nav-vertical_shade" aria-label="Sub page">
            <div class="slds-nav-vertical__section">
                <h2 id="entity-header" class="slds-nav-vertical__title slds-text-title_caps">Catgeories</h2>
                <ul>
                    @foreach($categoriesNames as $key=>$value)
                        <li id="{{$value->category}}li" class="slds-nav-vertical__item slds-is-active languageItem"><a
                                    href="javascript:void(0);"
                                    onclick="showCategory('{{$value->category}}');"
                                    class="slds-nav-vertical__action"
                                    aria-describedby="entity-header"
                                    aria-current="page">{{$value->category}}</a>
                        </li>
                    @endforeach
                    <li class="slds-nav-vertical__item">
                        <button class="slds-button slds-button_reset slds-p-vertical_xx-small slds-size_1-of-1"
                                onclick="window.location.href='/newCat'">
                            <svg class="slds-button__icon slds-button__icon"
                                 aria-hidden="true">
                                <use xlink:href="/assets/icons/utility-sprite/svg/symbols.svg#add"
                                     xmlns:xlink="http://www.w3.org/1999/xlink"/>
                            </svg>
                            Add new category
                        </button>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</div>