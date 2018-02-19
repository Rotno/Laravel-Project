<div class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="javascript:void(0)">Brand</a>
    </div>
    <div class="navbar-collapse collapse navbar-responsive-collapse">
      <ul class="nav navbar-nav">
        <li class="active"><a href="{{ route('home') }}">Home</a></li>
        <li><a href="{{route('create')}}">Add New</a></li>
        <li class="btn-group">
          <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            {{Auth::user()->name}} <span class="caret"></span>
          </button>
          <ul class="dropdown-menu">
            <li><a href="#">Register</a></li>
            <li>
             
              <a href="/logout">Logout</a>

             
            </li>
          </ul>
        </li>
       
      </ul>


     
    </div>
  </div>
</div>