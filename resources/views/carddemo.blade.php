@extends('layout.app1')

  @section('content')

        <section>
            <div class="section-body">


                <div class="row">
                        <div class="col-sm-12">
                            <div class="card">
                                <div class="card-header bgm-cyan">
                                    <h2>Cyan <small>You can type anything here...</small></h2>

                                    <ul class="actions actions-alt">
                                        <li class="dropdown">
                                            <a href="" data-toggle="dropdown" aria-expanded="false">
                                                <i class="zmdi zmdi-more-vert"></i>
                                            </a>

                                            <ul class="dropdown-menu dropdown-menu-right">
                                                <li>
                                                    <a href="">Refresh</a>
                                                </li>
                                                <li>
                                                    <a href="">Manage Widgets</a>
                                                </li>
                                                <li>
                                                    <a href="">Widgets Settings</a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>

                                <div class="card-body card-padding">
                                    Cras leo sem, egestas a accumsan eget, euismod at nunc. Praesent vel mi blandit, tempus ex gravida, accumsan dui. Sed sed aliquam augue. Nullam vel suscipit purus, eu facilisis ante. Mauris nec commodo felis.
                                </div>
                            </div>
                        </div>
                   </div>
            </div>
</section>
@endsection
