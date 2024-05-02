@include('includes.sidebar')
<main id="main" class="main">

    {{-- <div class="pagetitle">
        <h1>Dashboard</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item active">Dashboard</li>
            </ol>
        </nav>
    </div><!-- End Page Title --> --}}

    <section class="section dashboard">
        <div class="container py-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Add Tests </h5>
                    @if (session()->has('message'))
                        <div class="alert alert-success">
                            <button type="button" class="close" data-dismiss="alert">x</button>

                            {{ session()->get('message') }}
                        </div>
                    @endif
                    <div class="row">
                        <div class="col-md-6">
                            <form action="{{ route('admin.tests.store') }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                <div class="row mb-4">
                                    <label for="inputText" class="col-sm-4 col-form-label">Test Name</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" name="tests">
                                    </div>
                                </div>

                                <div class="row mb-4">
                                    <label for="inputNumber" class="col-sm-4 col-form-label">File Upload</label>
                                    <div class="col-sm-8">
                                        <input class="form-control" type="file" id="filetag" name="image">
                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <label for="inputNumber" class="col-sm-4 col-form-label">Image</label>
                                    <div class="col-sm-8">
                                        <img src="" class="rounded" id="preview" width="120px">
                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <label for="inputText" class="col-sm-4 col-form-label">Discription</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" name="description">
                                    </div>
                        </div>
                        <div class="row mb-4">
                            <label for="inputText" class="col-sm-4 col-form-label">Price</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="charges">
                            </div>
                        </div>

                        <div class="row mb-4">
                            <label for="inputText" class="col-sm-4 col-form-label">Discount</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="discount">
                            </div>
                        </div>

                    </div>

                </div>
                {{-- </div> --}}
                {{-- 
            </div>
        </div> --}}

                <div class="row mb-4">
                    <label class="col-sm-2 col-form-label">Submit Button</label>
                    <div class="col-sm-10">
                        <button type="submit" class="btn btn-primary">Submit Form</button>
                    </div>
                    {{-- </div> --}}
                    </form>
                </div>

            </div>
        </div>
        </div>
        </div>
    </section>

    <script>
        var fileTag = document.getElementById("filetag"),
            preview = document.getElementById("preview");

        fileTag.addEventListener("change", function() {
            changeImage(this);
        });

        function changeImage(input) {
            var reader;

            if (input.files && input.files[0]) {
                reader = new FileReader();

                reader.onload = function(e) {
                    preview.setAttribute('src', e.target.result);
                }

                reader.readAsDataURL(input.files[0]);
            }
        }
    </script>



</main><!-- End #main -->
@include('includes.footer')
