@extends(backpack_view('blank'))
@include('Admin.includes.cdn')

@section('content')
    <main class="main pt-2">
        <nav aria-label="breadcrumb" class="d-none d-lg-block">
            <ol class="breadcrumb bg-transparent p-0 justify-content-end">
                <li class="breadcrumb-item text-capitalize"><a href="/admin/dashboard">Admin</a></li>
                <li class="breadcrumb-item text-capitalize active" aria-current="page">edit</li>
            </ol>
        </nav>

        <section class="container-fluid">
            <h2 class="ml-1">
                <span class="text-capitalize">Edit FAQ</span>




            </h2>
        </section>
        <div class="container-fluid animated fadeIn">
            <div class="row">
              <form action="{{url('/admin/faq/update/'.$details[0]->id)}}" method="post">
                  {!! csrf_field() !!}
                  {!! method_field('PUT') !!}

                  <div class="col-md-12 bold-labels">
                      <div class="row">
                          <div class="col-md-10">

                              <div class="card">
                                  <div class="card-body row">
                                      <div class="form-group col-sm-12" element="div" bp-field-wrapper="true"
                                           bp-field-name="title" bp-field-type="text">
                                          <label>Title</label>

                                          <input type="text" name="title" value="{{$details[0]->title}}"  class="form-control" required>

                                      </div>

                                      <div class="form-group col-sm-12" element="div" bp-field-wrapper="true"
                                           bp-field-name="title" bp-field-type="text">
                                          <label>content</label>

                                         <textarea name="description" class="form-control">{{$details[0]->content}}</textarea>

                                      </div>

                                      <div id="saveActions" class="form-group ">

                                          <input type="hidden" name="_save_action" value="save_and_back">
                                          <div class="btn-group" role="group">

                                              <button type="submit" class="btn btn-success">
                                                  <span class="la la-save" role="presentation" aria-hidden="true"></span> &nbsp;
                                                  <span data-value="save_and_back">Update Information</span>
                                              </button>



                                          </div>

                                       

                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </form>
            </div>
        </div>

    </main>
@endsection
