<section class="page-section">
    <div class="container">
        <div class="tabs">
            <ul id="tabs" class="nav nav-justified-off"><!--
                --><li class=""><a href="#tab-1" data-toggle="tab">Featured</a></li><!--
                --><li class="active"><a href="#tab-2" data-toggle="tab">Newest</a></li><!--
                --><li class=""><a href="#tab-3" data-toggle="tab">Top Sellers</a></li>
            </ul>
        </div>

        <div class="tab-content">
            <x-tabs.tab tabId="tab-1" :isActive="false"/>
            <x-tabs.tab tabId="tab-2" :isActive="true"/>
            <x-tabs.tab tabId="tab-3" :isActive="false"/>
        </div>

    </div>
</section>