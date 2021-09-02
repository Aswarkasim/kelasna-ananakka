<div class="container my-3">

  <div class="row">
   @include('/layouts/belajar/nav')


    <div class="col-md-9 pb-5 rounded shadow-sm">
    @if (isset($content_belajar))
        @include($content_belajar)
    @endif
    </div>


  </div>


</div>
</div>