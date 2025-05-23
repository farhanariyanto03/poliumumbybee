@extends('layouts.master')

@section('title', 'Modernize Bootstrap Admin')

@section('pageContent')

        @include('layouts.breadcrumb', ['title' => 'Nestable', 'subtitle' => 'Home'])
          <div class="row">
            <div class="col-lg-4 col-md-12">
              <div class="card">
                <div class="border-bottom title-part-padding">
                  <h4 class="card-title mb-0">Nestable1</h4>
                </div>
                <div class="card-body">
                  <div class="myadmin-dd dd" id="nestable">
                    <ol class="dd-list">
                      <li class="dd-item" data-id="1">
                        <div class="dd-handle">Item 1</div>
                      </li>
                      <li class="dd-item" data-id="2">
                        <div class="dd-handle">Item 2</div>
                        <ol class="dd-list">
                          <li class="dd-item" data-id="3">
                            <div class="dd-handle">Item 3</div>
                          </li>
                          <li class="dd-item" data-id="4">
                            <div class="dd-handle">Item 4</div>
                          </li>
                          <li class="dd-item" data-id="5">
                            <div class="dd-handle">Item 5</div>
                            <ol class="dd-list">
                              <li class="dd-item" data-id="6">
                                <div class="dd-handle">Item 6</div>
                              </li>
                              <li class="dd-item" data-id="7">
                                <div class="dd-handle">Item 7</div>
                              </li>
                              <li class="dd-item" data-id="8">
                                <div class="dd-handle">Item 8</div>
                              </li>
                            </ol>
                          </li>
                          <li class="dd-item" data-id="9">
                            <div class="dd-handle">Item 9</div>
                          </li>
                          <li class="dd-item" data-id="10">
                            <div class="dd-handle">Item 10</div>
                          </li>
                        </ol>
                      </li>
                    </ol>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-12">
              <div class="card">
                <div class="border-bottom title-part-padding">
                  <h4 class="card-title mb-0">Nestable2</h4>
                </div>
                <div class="card-body">
                  <div class="myadmin-dd-empty dd" id="nestable2">
                    <ol class="dd-list">
                      <li class="dd-item dd3-item" data-id="13">
                        <div class="dd-handle dd3-handle"></div>
                        <div class="dd3-content">Item 13</div>
                      </li>
                      <li class="dd-item dd3-item" data-id="14">
                        <div class="dd-handle dd3-handle"></div>
                        <div class="dd3-content">Item 14</div>
                      </li>
                      <li class="dd-item dd3-item" data-id="14">
                        <div class="dd-handle dd3-handle"></div>
                        <div class="dd3-content">Item 16</div>
                      </li>
                      <li class="dd-item dd3-item" data-id="14">
                        <div class="dd-handle dd3-handle"></div>
                        <div class="dd3-content">Item 17</div>
                      </li>
                      <li class="dd-item dd3-item" data-id="14">
                        <div class="dd-handle dd3-handle"></div>
                        <div class="dd3-content">Item 18</div>
                      </li>
                      <li class="dd-item dd3-item" data-id="14">
                        <div class="dd-handle dd3-handle"></div>
                        <div class="dd3-content">Item 19</div>
                      </li>
                      <li class="dd-item dd3-item" data-id="15">
                        <div class="dd-handle dd3-handle"></div>
                        <div class="dd3-content">Item 15</div>
                        <ol class="dd-list">
                          <li class="dd-item dd3-item" data-id="16">
                            <div class="dd-handle dd3-handle"></div>
                            <div class="dd3-content">Item 16</div>
                          </li>
                          <li class="dd-item dd3-item" data-id="17">
                            <div class="dd-handle dd3-handle"></div>
                            <div class="dd3-content">Item 17</div>
                          </li>
                          <li class="dd-item dd3-item" data-id="18">
                            <div class="dd-handle dd3-handle"></div>
                            <div class="dd3-content">Item 18</div>
                          </li>
                        </ol>
                      </li>
                    </ol>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-12">
              <div class="card">
                <div class="border-bottom title-part-padding">
                  <h4 class="card-title mb-0">Nestable3</h4>
                </div>
                <div class="card-body">
                  <div class="dd myadmin-dd" id="nestable-menu">
                    <ol class="dd-list">
                      <li class="dd-item" data-id="13">
                        <div class="dd-handle">Item 13</div>
                      </li>
                      <li class="dd-item" data-id="13">
                        <div class="dd-handle">Item 13</div>
                      </li>
                      <li class="dd-item" data-id="14">
                        <div class="dd-handle">Item 14</div>
                      </li>
                      <li class="dd-item" data-id="15">
                        <div class="dd-handle">Item 15</div>
                        <ol class="dd-list">
                          <li class="dd-item" data-id="16">
                            <div class="dd-handle">Item 16</div>
                          </li>
                          <li class="dd-item" data-id="17">
                            <div class="dd-handle">Item 17</div>
                          </li>
                          <li class="dd-item" data-id="18">
                            <div class="dd-handle">Item 18</div>
                          </li>
                          <li class="dd-item" data-id="16">
                            <div class="dd-handle">Item 19</div>
                          </li>
                          <li class="dd-item" data-id="17">
                            <div class="dd-handle">Item 20</div>
                          </li>
                          <li class="dd-item" data-id="18">
                            <div class="dd-handle">Item 21</div>
                          </li>
                        </ol>
                      </li>
                    </ol>
                  </div>
                </div>
              </div>
            </div>
          </div>

@endsection

@section('scripts')
  <script src="{{ URL::asset('build/js/vendor.min.js') }}"></script>
  <script src="{{ URL::asset('build/libs/nestable/jquery.nestable.js') }}"></script>
  <script src="{{ URL::asset('build/js/plugins/nestable-init.js') }}"></script>
@endsection
