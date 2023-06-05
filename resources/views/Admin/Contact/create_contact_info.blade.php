@extends(backpack_view('blank'))
@include('Admin.includes.cdn')

@section('content')
    <main class="main pt-2">


        <nav aria-label="breadcrumb" class="d-none d-lg-block">
            <ol class="breadcrumb bg-transparent p-0 justify-content-end">
                <li class="breadcrumb-item text-capitalize"><a href="/admin/dashboard">Admin</a></li>
                <li class="breadcrumb-item text-capitalize"><a href="/admin/contact-info">contact
                        infos</a></li>
                <li class="breadcrumb-item text-capitalize active" aria-current="page">Add</li>
            </ol>
        </nav>


        <section class="container-fluid">
            <h2>
                <span class="text-capitalize">contact infos</span>
                <small>Add contact info.</small>

                <small><a href="/admin/contact-info" class="d-print-none font-sm"><i
                            class="la la-angle-double-left"></i> Back to all <span>contact infos</span></a></small>
            </h2>
        </section>

        <div class="container-fluid animated fadeIn">



            <div class="row">
                <div class="col-md-8 bold-labels">



                    <form method="post" action="/admin/contact-info" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="_token" value="PBXnThALVMuqEqQZMwqtbJpTzJ5ocib5qLg4YwLg">

                        <input type="hidden" name="_http_referrer" value="/admin/contact-info">


                        <div class="card">
                            <div class="card-body row">
                                <div class="form-group col-sm-12" element="div" bp-field-wrapper="true"
                                    bp-field-name="content" bp-field-type="textarea">
                                    <label>Content</label>
                                    <textarea name="content" class="form-control" required></textarea>


                                </div>
                                <div class="mb-3">
                                    <label for="formFile" class="form-label">Banner Image</label>
                                    <input class="form-control" name="banner_image" type="file" id="formFile" required="">
                                </div>
                            </div>
                        </div>






                        <div class="d-none" id="parentLoadedAssets">[]</div>
                        <div id="saveActions" class="form-group">

                            <input type="hidden" name="_save_action" value="save_and_back">
                            <div class="btn-group" role="group">

                                <button type="submit" class="btn btn-success">
                                    <span class="la la-save" role="presentation" aria-hidden="true"></span> &nbsp;
                                    <span data-value="save_and_back">Save and back</span>
                                </button>

                              

                            </div>

                            <a href="http://127.0.0.1:8000/admin/contact-info" class="btn btn-default"><span
                                    class="la la-ban"></span> &nbsp;Cancel</a>

                        </div>

                    </form>
                </div>
            </div>



        </div>

    </main>
@endsection
