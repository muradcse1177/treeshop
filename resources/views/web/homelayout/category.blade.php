<div class="sidebar-layout mb-35">
    <div class="category-menu">
        <div class="category-heading">
            <h2 class="categories-toggle"><span>categories</span></h2>
        </div>
        <div id="cate-toggle" class="category-menu-list">
            <ul>
                @foreach($data['category'] as $category)
                <li><a href="/wproduct/{{$category->id}}">{{$category->name}}</a></li>
                @endforeach
                <li class="rx-parent">
                </li>
            </ul>
        </div>
    </div>
</div>