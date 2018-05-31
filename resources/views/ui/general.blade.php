@extends('layouts.app')

@section('content')
<div class="container-fluid">
  <!-- COLOR PALETTE -->
  <div class="card card-default color-palette-box">
    <div class="card-header">
      <h3 class="card-title">
        <i class="fa fa-tag"></i>
        Color Palette
      </h3>
    </div>
    <div class="card-body">
      <div class="row">
        <div class="col-sm-4 col-md-2">
          <h4 class="text-center">Primary</h4>

          <div class="color-palette-set">
            <div class="bg-primary disabled color-palette">
              <span>Disabled</span>
            </div>
            <div class="bg-primary color-palette">
              <span>#3c8dbc</span>
            </div>
          </div>
        </div>
        <!-- /.col -->
        <div class="col-sm-4 col-md-2">
          <h4 class="text-center">Info</h4>

          <div class="color-palette-set">
            <div class="bg-info disabled color-palette">
              <span>Disabled</span>
            </div>
            <div class="bg-info color-palette">
              <span>#00c0ef</span>
            </div>
          </div>
        </div>
        <!-- /.col -->
        <div class="col-sm-4 col-md-2">
          <h4 class="text-center">Success</h4>

          <div class="color-palette-set">
            <div class="bg-success disabled color-palette">
              <span>Disabled</span>
            </div>
            <div class="bg-success color-palette">
              <span>#00a65a</span>
            </div>
          </div>
        </div>
        <!-- /.col -->
        <div class="col-sm-4 col-md-2">
          <h4 class="text-center">Warning</h4>

          <div class="color-palette-set">
            <div class="bg-warning disabled color-palette">
              <span>Disabled</span>
            </div>
            <div class="bg-warning color-palette">
              <span>#f39c12</span>
            </div>
          </div>
        </div>
        <!-- /.col -->
        <div class="col-sm-4 col-md-2">
          <h4 class="text-center">Danger</h4>

          <div class="color-palette-set">
            <div class="bg-danger disabled color-palette">
              <span>Disabled</span>
            </div>
            <div class="bg-danger color-palette">
              <span>#f56954</span>
            </div>
          </div>
        </div>
        <!-- /.col -->
        <div class="col-sm-4 col-md-2">
          <h4 class="text-center">Gray</h4>

          <div class="color-palette-set">
            <div class="bg-gray disabled color-palette">
              <span>Disabled</span>
            </div>
            <div class="bg-gray color-palette">
              <span>#d2d6de</span>
            </div>
          </div>
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
      <div class="row">
        <!-- /.col -->
        <div class="col-sm-4 col-md-2">
          <h4 class="text-center">Black</h4>

          <div class="color-palette-set">
            <div class="bg-black disabled color-palette">
              <span>Disabled</span>
            </div>
            <div class="bg-black color-palette">
              <span>#111111</span>
            </div>
          </div>
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->
  <!-- START ALERTS AND CALLOUTS -->
  <h5 class="mt-4 mb-2">Alerts and Callouts</h5>

  <div class="row">
    <div class="col-md-6">
      <div class="card card-default">
        <div class="card-header">
          <h3 class="card-title">
            <i class="fa fa-warning"></i>
            Alerts
          </h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
          <div class="alert alert-danger alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <h5>
              <i class="icon fa fa-ban"></i> Alert!</h5>
            Danger alert preview. This alert is dismissable. A wonderful serenity has taken possession of my entire soul, like these
            sweet mornings of spring which I enjoy with my whole heart.
          </div>
          <div class="alert alert-info alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <h5>
              <i class="icon fa fa-info"></i> Alert!</h5>
            Info alert preview. This alert is dismissable.
          </div>
          <div class="alert alert-warning alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <h5>
              <i class="icon fa fa-warning"></i> Alert!</h5>
            Warning alert preview. This alert is dismissable.
          </div>
          <div class="alert alert-success alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <h5>
              <i class="icon fa fa-check"></i> Alert!</h5>
            Success alert preview. This alert is dismissable.
          </div>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->
    </div>
    <!-- /.col -->

    <div class="col-md-6">
      <div class="card card-default">
        <div class="card-header">
          <h3 class="card-title">
            <i class="fa fa-bullhorn"></i>
            Callouts
          </h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
          <div class="callout callout-danger">
            <h5>I am a danger callout!</h5>

            <p>There is a problem that we need to fix. A wonderful serenity has taken possession of my entire soul, like these
              sweet mornings of spring which I enjoy with my whole heart.</p>
          </div>
          <div class="callout callout-info">
            <h5>I am an info callout!</h5>

            <p>Follow the steps to continue to payment.</p>
          </div>
          <div class="callout callout-warning">
            <h5>I am a warning callout!</h5>

            <p>This is a yellow callout.</p>
          </div>
          <div class="callout callout-success">
            <h5>I am a success callout!</h5>

            <p>This is a green callout.</p>
          </div>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->
    </div>
    <!-- /.col -->
  </div>
  <!-- /.row -->
  <!-- END ALERTS AND CALLOUTS -->
  <h5 class="mt-4 mb-2">Tabs in Cards</h5>

  <div class="row">
    <div class="col-12">
      <!-- Custom Tabs -->
      <div class="card">
        <div class="card-header d-flex p-0">
          <h3 class="card-title p-3">Tabs</h3>
          <ul class="nav nav-pills ml-auto p-2">
            <li class="nav-item">
              <a class="nav-link active" href="#tab_1" data-toggle="tab">Tab 1</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#tab_2" data-toggle="tab">Tab 2</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#tab_3" data-toggle="tab">Tab 3</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">
                Dropdown
                <span class="caret"></span>
              </a>
              <div class="dropdown-menu">
                <a class="dropdown-item" tabindex="-1" href="#">Action</a>
                <a class="dropdown-item" tabindex="-1" href="#">Another action</a>
                <a class="dropdown-item" tabindex="-1" href="#">Something else here</a>
                <div class="divider"></div>
                <a class="dropdown-item" tabindex="-1" href="#">Separated link</a>
              </div>
            </li>
          </ul>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
          <div class="tab-content">
            <div class="tab-pane active" id="tab_1">
              A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole
              heart. I am alone, and feel the charm of existence in this spot, which was created for the bliss of souls like
              mine. I am so happy, my dear friend, so absorbed in the exquisite sense of mere tranquil existence, that I
              neglect my talents. I should be incapable of drawing a single stroke at the present moment; and yet I feel
              that I never was a greater artist than now.
            </div>
            <!-- /.tab-pane -->
            <div class="tab-pane" id="tab_2">
              The European languages are members of the same family. Their separate existence is a myth. For science, music, sport, etc,
              Europe uses the same vocabulary. The languages only differ in their grammar, their pronunciation and their
              most common words. Everyone realizes why a new common language would be desirable: one could refuse to pay
              expensive translators. To achieve this, it would be necessary to have uniform grammar, pronunciation and more
              common words. If several languages coalesce, the grammar of the resulting language is more simple and regular
              than that of the individual languages.
            </div>
            <!-- /.tab-pane -->
            <div class="tab-pane" id="tab_3">
              Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy
              text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen
              book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially
              unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages,
              and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
            </div>
            <!-- /.tab-pane -->
          </div>
          <!-- /.tab-content -->
        </div>
        <!-- /.card-body -->
      </div>
      <!-- ./card -->
    </div>
    <!-- /.col -->
  </div>
  <!-- /.row -->
  <!-- END CUSTOM TABS -->
  <!-- START PROGRESS BARS -->
  <h5 class="mt-4 mb-2">Progress Bars</h5>

  <div class="row">
    <div class="col-md-6">
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Progress Bars Different Sizes</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
          <p>
            <code>.progress</code>
          </p>

          <div class="progress">
            <div class="progress-bar bg-primary progress-bar-striped" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"
              style="width: 40%">
              <span class="sr-only">40% Complete (success)</span>
            </div>
          </div>
          <p>
            <code>.progress-sm</code>
          </p>

          <div class="progress progress-sm active">
            <div class="progress-bar bg-success progress-bar-striped" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"
              style="width: 20%">
              <span class="sr-only">20% Complete</span>
            </div>
          </div>
          <p>
            <code>.progress-xs</code>
          </p>

          <div class="progress progress-xs">
            <div class="progress-bar bg-warning progress-bar-striped" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"
              style="width: 60%">
              <span class="sr-only">60% Complete (warning)</span>
            </div>
          </div>
          <p>
            <code>.progress-xxs</code>
          </p>

          <div class="progress progress-xxs">
            <div class="progress-bar progress-bar-danger progress-bar-striped" role="progressbar" aria-valuenow="60" aria-valuemin="0"
              aria-valuemax="100" style="width: 60%">
              <span class="sr-only">60% Complete (warning)</span>
            </div>
          </div>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->
    </div>
    <!-- /.col (left) -->
    <div class="col-md-6">
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Progress bars</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
          <div class="progress mb-3">
            <div class="progress-bar bg-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
              <span class="sr-only">40% Complete (success)</span>
            </div>
          </div>
          <div class="progress mb-3">
            <div class="progress-bar bg-info" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%">
              <span class="sr-only">20% Complete</span>
            </div>
          </div>
          <div class="progress mb-3">
            <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
              <span class="sr-only">60% Complete (warning)</span>
            </div>
          </div>
          <div class="progress mb-3">
            <div class="progress-bar bg-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
              <span class="sr-only">80% Complete</span>
            </div>
          </div>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->
    </div>
    <!-- /.col (right) -->
  </div>
  <!-- /.row -->
  <div class="row">
    <div class="col-md-6">
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Vertical Progress Bars Different Sizes</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body text-center">
          <p>By adding the class
            <code>.vertical</code> and
            <code>.progress-sm</code>,
            <code>.progress-xs</code>
            or
            <code>.progress-xxs</code> we achieve:</p>

          <div class="progress vertical active">
            <div class="progress-bar bg-primary progress-bar-striped" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"
              style="height: 40%">
              <span class="sr-only">40%</span>
            </div>
          </div>
          <div class="progress vertical progress-sm">
            <div class="progress-bar bg-success" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="height: 100%">
              <span class="sr-only">100%</span>
            </div>
          </div>
          <div class="progress vertical progress-xs">
            <div class="progress-bar bg-warning progress-bar-striped" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"
              style="height: 60%">
              <span class="sr-only">60%</span>
            </div>
          </div>
          <div class="progress vertical progress-xxs">
            <div class="progress-bar bg-info progress-bar-striped" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"
              style="height: 60%">
              <span class="sr-only">60%</span>
            </div>
          </div>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->
    </div>
    <!-- /.col (left) -->
    <div class="col-md-6">
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Vertical Progress bars</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body text-center">
          <p>By adding the class
            <code>.vertical</code> we achieve:</p>

          <div class="progress vertical">
            <div class="progress-bar bg-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="height: 40%">
              <span class="sr-only">40%</span>
            </div>
          </div>
          <div class="progress vertical">
            <div class="progress-bar bg-info" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="height: 20%">
              <span class="sr-only">20%</span>
            </div>
          </div>
          <div class="progress vertical">
            <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="height: 60%">
              <span class="sr-only">60%</span>
            </div>
          </div>
          <div class="progress vertical">
            <div class="progress-bar bg-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="height: 80%">
              <span class="sr-only">80%</span>
            </div>
          </div>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->
    </div>
    <!-- /.col (right) -->
  </div>
  <!-- /.row -->
  <!-- END PROGRESS BARS -->

  <!-- START ACCORDION & CAROUSEL-->
  <h5 class="mt-4 mb-2">Bootstrap Accordion & Carousel</h5>

  <div class="row">
    <div class="col-md-6">
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Collapsible Accordion</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
          <div id="accordion">
            <!-- we are adding the .class so bootstrap.js collapse plugin detects it -->
            <div class="card card-primary">
              <div class="card-header">
                <h4 class="card-title">
                  <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                    Collapsible Group Item #1
                  </a>
                </h4>
              </div>
              <div id="collapseOne" class="panel-collapse collapse in">
                <div class="card-body">
                  Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute,
                  non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor,
                  sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh
                  helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher
                  vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably
                  haven't heard of them accusamus labore sustainable VHS.
                </div>
              </div>
            </div>
            <div class="card card-danger">
              <div class="card-header">
                <h4 class="card-title">
                  <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
                    Collapsible Group Danger
                  </a>
                </h4>
              </div>
              <div id="collapseTwo" class="panel-collapse collapse">
                <div class="card-body">
                  Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute,
                  non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor,
                  sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh
                  helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher
                  vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably
                  haven't heard of them accusamus labore sustainable VHS.
                </div>
              </div>
            </div>
            <div class="card card-success">
              <div class="card-header">
                <h4 class="card-title">
                  <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
                    Collapsible Group Success
                  </a>
                </h4>
              </div>
              <div id="collapseThree" class="panel-collapse collapse">
                <div class="card-body">
                  Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute,
                  non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor,
                  sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh
                  helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher
                  vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably
                  haven't heard of them accusamus labore sustainable VHS.
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->
    </div>
    <!-- /.col -->
    <div class="col-md-6">
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Carousel</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
          <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img class="d-block w-100" src="http://placehold.it/900x500/39CCCC/ffffff&text=I+Love+Bootstrap" alt="First slide">
              </div>
              <div class="carousel-item">
                <img class="d-block w-100" src="http://placehold.it/900x500/3c8dbc/ffffff&text=I+Love+Bootstrap" alt="Second slide">
              </div>
              <div class="carousel-item">
                <img class="d-block w-100" src="http://placehold.it/900x500/f39c12/ffffff&text=I+Love+Bootstrap" alt="Third slide">
              </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->
    </div>
    <!-- /.col -->
  </div>
  <!-- /.row -->
  <!-- END ACCORDION & CAROUSEL-->

  <!-- START TYPOGRAPHY -->
  <h5 class="mt-4 mb-2">Typography</h5>

  <div class="row">
    <div class="col-md-6">
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">
            <i class="fa fa-text-width"></i>
            Headlines
          </h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
          <h1>h1. Bootstrap heading</h1>

          <h2>h2. Bootstrap heading</h2>

          <h3>h3. Bootstrap heading</h3>
          <h4>h4. Bootstrap heading</h4>
          <h5>h5. Bootstrap heading</h5>
          <h6>h6. Bootstrap heading</h6>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->
    </div>
    <!-- ./col -->
    <div class="col-md-6">
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">
            <i class="fa fa-text-width"></i>
            Text Emphasis
          </h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
          <p class="lead">Lead to emphasize importance</p>

          <p class="text-success">Text green to emphasize success</p>

          <p class="text-info">Text aqua to emphasize info</p>

          <p class="text-primary">Text light blue to emphasize info (2)</p>

          <p class="text-danger">Text red to emphasize danger</p>

          <p class="text-warning">Text yellow to emphasize warning</p>

          <p class="text-muted">Text muted to emphasize general</p>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->
    </div>
    <!-- ./col -->
  </div>
  <!-- /.row -->

  <div class="row">
    <div class="col-md-6">
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">
            <i class="fa fa-text-width"></i>
            Block Quotes
          </h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
          <blockquote>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
            <small>Someone famous in
              <cite title="Source Title">Source Title</cite>
            </small>
          </blockquote>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->
    </div>
    <!-- ./col -->
    <div class="col-md-6">
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">
            <i class="fa fa-text-width"></i>
            Block Quotes Pulled Right
          </h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body clearfix">
          <blockquote class="float-right">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
            <small>Someone famous in
              <cite title="Source Title">Source Title</cite>
            </small>
          </blockquote>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->
    </div>
    <!-- ./col -->
  </div>
  <!-- /.row -->

  <div class="row">
    <div class="col-md-4">
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">
            <i class="fa fa-text-width"></i>
            Unordered List
          </h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
          <ul>
            <li>Lorem ipsum dolor sit amet</li>
            <li>Consectetur adipiscing elit</li>
            <li>Integer molestie lorem at massa</li>
            <li>Facilisis in pretium nisl aliquet</li>
            <li>Nulla volutpat aliquam velit
              <ul>
                <li>Phasellus iaculis neque</li>
                <li>Purus sodales ultricies</li>
                <li>Vestibulum laoreet porttitor sem</li>
                <li>Ac tristique libero volutpat at</li>
              </ul>
            </li>
            <li>Faucibus porta lacus fringilla vel</li>
            <li>Aenean sit amet erat nunc</li>
            <li>Eget porttitor lorem</li>
          </ul>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->
    </div>
    <!-- ./col -->
    <div class="col-md-4">
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">
            <i class="fa fa-text-width"></i>
            Ordered Lists
          </h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
          <ol>
            <li>Lorem ipsum dolor sit amet</li>
            <li>Consectetur adipiscing elit</li>
            <li>Integer molestie lorem at massa</li>
            <li>Facilisis in pretium nisl aliquet</li>
            <li>Nulla volutpat aliquam velit
              <ol>
                <li>Phasellus iaculis neque</li>
                <li>Purus sodales ultricies</li>
                <li>Vestibulum laoreet porttitor sem</li>
                <li>Ac tristique libero volutpat at</li>
              </ol>
            </li>
            <li>Faucibus porta lacus fringilla vel</li>
            <li>Aenean sit amet erat nunc</li>
            <li>Eget porttitor lorem</li>
          </ol>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->
    </div>
    <!-- ./col -->
    <div class="col-md-4">
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">
            <i class="fa fa-text-width"></i>
            Unstyled List
          </h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
          <ul class="list-unstyled">
            <li>Lorem ipsum dolor sit amet</li>
            <li>Consectetur adipiscing elit</li>
            <li>Integer molestie lorem at massa</li>
            <li>Facilisis in pretium nisl aliquet</li>
            <li>Nulla volutpat aliquam velit
              <ul>
                <li>Phasellus iaculis neque</li>
                <li>Purus sodales ultricies</li>
                <li>Vestibulum laoreet porttitor sem</li>
                <li>Ac tristique libero volutpat at</li>
              </ul>
            </li>
            <li>Faucibus porta lacus fringilla vel</li>
            <li>Aenean sit amet erat nunc</li>
            <li>Eget porttitor lorem</li>
          </ul>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->
    </div>
    <!-- ./col -->
  </div>
  <!-- /.row -->

  <div class="row">
    <div class="col-md-6">
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">
            <i class="fa fa-text-width"></i>
            Description
          </h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
          <dl>
            <dt>Description lists</dt>
            <dd>A description list is perfect for defining terms.</dd>
            <dt>Euismod</dt>
            <dd>Vestibulum id ligula porta felis euismod semper eget lacinia odio sem nec elit.</dd>
            <dd>Donec id elit non mi porta gravida at eget metus.</dd>
            <dt>Malesuada porta</dt>
            <dd>Etiam porta sem malesuada magna mollis euismod.</dd>
          </dl>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->
    </div>
    <!-- ./col -->
    <div class="col-md-6">
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">
            <i class="fa fa-text-width"></i>
            Description Horizontal
          </h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
          <dl class="dl-horizontal">
            <dt>Description lists</dt>
            <dd>A description list is perfect for defining terms.</dd>
            <dt>Euismod</dt>
            <dd>Vestibulum id ligula porta felis euismod semper eget lacinia odio sem nec elit.</dd>
            <dd>Donec id elit non mi porta gravida at eget metus.</dd>
            <dt>Malesuada porta</dt>
            <dd>Etiam porta sem malesuada magna mollis euismod.</dd>
            <dt>Felis euismod semper eget lacinia</dt>
            <dd>Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.
            </dd>
          </dl>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->
    </div>
    <!-- ./col -->
  </div>
  <!-- /.row -->
  <!-- END TYPOGRAPHY -->
</div>
@endsection