<div class="col-sm-3 offset-sm-1 blog-sidebar">
    <div class="sidebar-module sidebar-module-inset">
        <h4>About</h4>
        <p>Example of recordings for patients. <br><em>Author: zoolinom</em></p>
    </div>
    <div class="sidebar-module">
        <h4>Records by date</h4>
        <ol class="list-unstyled">
           @foreach($archives as $stats)
               <li>
                   <a href="/records?month={{ $stats['month'] }}&year={{ $stats['year'] }}">
                       {{ $stats['month'] . ' ' . $stats['year'] }}
                   </a>
               </li>
            @endforeach
        </ol>
    </div>
    <div class="sidebar-module">
        <h4>Elsewhere</h4>
        <ol class="list-unstyled">
            <li><a href="https://github.com/zoolinom/Laravel_example">GitHub</a></li>
            <li><a href="#">Twitter</a></li>
            <li><a href="#">Facebook</a></li>
        </ol>
    </div>
</div><!-- /.blog-sidebar -->
