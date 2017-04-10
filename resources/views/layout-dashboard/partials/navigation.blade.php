<ul class="nav">
    <li class="{{ active('products.*') }}">
        <a href="{{route('products.index')}}">
            <i class="pe-7s-graph"></i>
            <p>Products</p>
        </a>
    </li>
    <li class="{{ active('events.*') }}">
        <a href="{{route('events.index')}}">
            <i class="pe-7s-graph"></i>
            <p>Events</p>
        </a>
    </li>
    <li class="{{ active('blurbs.*') }}">
        <a href="{{route('blurbs.index')}}">
            <i class="pe-7s-graph"></i>
            <p>Blurbs</p>
        </a>
    </li>
    <!-- <li>
        <a data-toggle="collapse" href="#componentsExamples">
            <i class="pe-7s-plugin"></i>
            <p>Menu with links
               <b class="caret"></b>
            </p>
        </a>
        <div class="collapse" id="componentsExamples">
            <ul class="nav">
                <li><a href="#">Link 1</a></li>
                <li><a href="#">Link 2</a></li>
                <li><a href="#">Link 3</a></li>
            </ul>
        </div>
    </li> -->

</ul>