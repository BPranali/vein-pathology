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
                    <h5 class="card-title">Add Packages </h5>
                    @if (session()->has('message'))
                        <div class="alert alert-success">
                            <button type="button" class="close" data-dismiss="alert">x</button>

                            {{ session()->get('message') }}
                        </div>
                    @endif
                    <div class="row">
                        <div class="col-md-6">
                            <form action="{{ route('admin.packages.store') }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                <div class="row mb-3">
                                    <label for="inputText" class="col-sm-2 col-form-label">packages</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="packages">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputText" class="col-sm-2 col-form-label">Include Test</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="include_test">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputNumber" class="col-sm-2 col-form-label">File Upload</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" type="file" id="filetag" name="image">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputNumber" class="col-sm-2 col-form-label">Image</label>
                                    <div class="col-sm-10">
                                        <img src="" class="rounded" id="preview" width="120px">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputText" class="col-sm-2 col-form-label">Total Charges</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="charges">
                                    </div>
                                </div>

                                {{-- <div class="row mb-3">
                                        <label for="inputText" class="col-sm-2 col-form-label">Quantity</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="quantity">
                                        </div>
                                    </div> --}}
                        </div>
                    <div class="col-md-6">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-check">
                                    <input name="test_name[]" class="form-check-input" type="checkbox" value="CBC"
                                        id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        CBC
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input name="test_name[]" class="form-check-input" type="checkbox"
                                        value="URINE ROUTINE" id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">
                                       RBS
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input name="test_name[]" class="form-check-input" type="checkbox"
                                        value="URINE ROUTINE" id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">
                                       VDRL
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input name="test_name[]" class="form-check-input" type="checkbox"
                                        value="URINE ROUTINE" id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        URINE ROUTINE
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input name="test_name[]" class="form-check-input" type="checkbox"
                                        value="LIVER FUNCTION TEST" id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        LIVER FUNCTION TEST
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input name="test_name[]" class="form-check-input" type="checkbox"
                                        value="KIDNEY FUNCTION TEST" id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        KIDNEY FUNCTION TEST
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input name="test_name[]" class="form-check-input" type="checkbox"
                                        value="THYROID PROFILE" id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        THYROID PROFILE
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input name="test_name[]" class="form-check-input" type="checkbox"
                                        value="FASTING BLOOD SUGAR" id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        FASTING BLOOD SUGAR
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input name="test_name[]" class="form-check-input" type="checkbox"
                                        value="POST MEAL BLOOD SUGAR" id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        POST MEAL BLOOD SUGAR
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input name="test_name[]" class="form-check-input" type="checkbox"
                                        value="FREE T3" id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        FREE T3
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input name="test_name[]" class="form-check-input" type="checkbox"
                                        value="FREE T4" id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        FREE T4
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input name="test_name[]" class="form-check-input" type="checkbox"
                                        value="VIT D" id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        VIT D
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input name="test_name[]" class="form-check-input" type="checkbox"
                                        value="VIT B12" id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        VIT B12
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input name="test_name[]" class="form-check-input" type="checkbox"
                                        value="RA - FACTOR" id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        RA - FACTOR
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input name="test_name[]" class="form-check-input" type="checkbox"
                                        value="CHLORIDE" id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        CHLORIDE
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input name="test_name[]" class="form-check-input" type="checkbox"
                                        value="MAGNESIUM" id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        MAGNESIUM
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input name="test_name[]" class="form-check-input" type="checkbox"
                                        value="IRON" id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        IRON
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input name="test_name[]" class="form-check-input" type="checkbox"
                                        value="TIBC" id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        TIBC
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input name="test_name[]" class="form-check-input" type="checkbox"
                                        value="TRANSFERRIN SATURATIO" id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        TRANSFERRIN SATURATIO
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input name="test_name[]" class="form-check-input" type="checkbox"
                                        value="UREA" id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        UREA
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input name="test_name[]" class="form-check-input" type="checkbox"
                                        value="HIV" id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        HIV
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input name="test_name[]" class="form-check-input" type="checkbox"
                                        value="HBSAG" id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        HBSAG
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input name="test_name[]" class="form-check-input" type="checkbox"
                                        value="HCV" id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        HCV
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input name="test_name[]" class="form-check-input" type="checkbox"
                                        value="BLOOD GROUP" id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        BLOOD GROUP
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input name="test_name[]" class="form-check-input" type="checkbox"
                                        value="DOUBLE MARKER" id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        DOUBLE MARKER
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input name="test_name[]" class="form-check-input" type="checkbox"
                                        value="CREATININE" id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        CREATININE
                                    </label>
                                </div>

                            </div>
                            <div class="col-md-6">
                                <div class="form-check">
                                    <input name="test_name[]" class="form-check-input" type="checkbox"
                                        value="FERRITINE" id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        FERRITINE
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input name="test_name[]" class="form-check-input" type="checkbox"
                                        value="FOLLIC ACID" id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        FOLLIC ACID
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input name="test_name[]" class="form-check-input" type="checkbox"
                                        value="HSCRP" id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        HSCRP
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input name="test_name[]" class="form-check-input" type="checkbox"
                                        value="IGE LEVEL" id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        IGE LEVEL
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input name="test_name[]" class="form-check-input" type="checkbox"
                                        value="HBA1C (HPLC METHOD)" id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        HBA1C (HPLC METHOD)
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input name="test_name[]" class="form-check-input" type="checkbox"
                                        value="SR.CREATININE" id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        SR.CREATININE
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input name="test_name[]" class="form-check-input" type="checkbox"
                                        value="SR.CREATININE" id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">
                                      FBS
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input name="test_name[]" class="form-check-input" type="checkbox"
                                        value="SR.CREATININE" id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        KFT
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input name="test_name[]" class="form-check-input" type="checkbox"
                                        value="SR.CREATININE" id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">
                                      LFT
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input name="test_name[]" class="form-check-input" type="checkbox"
                                        value="LIPID PROFILE" id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        LIPID PROFILE
                                    </label>
                                </div>

                                <div class="form-check">
                                    <input name="test_name[]" class="form-check-input" type="checkbox"
                                        value="PS FOR OPINION" id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        PS FOR OPINION
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input name="test_name[]" class="form-check-input" type="checkbox"
                                        value="ESR" id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        ESR
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input name="test_name[]" class="form-check-input" type="checkbox"
                                        value="TSH" id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        TSH
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input name="test_name[]" class="form-check-input" type="checkbox"
                                        value="ETICULOCYTES COUNT" id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        RETICULOCYTES COUNT
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input name="test_name[]" class="form-check-input" type="checkbox"
                                        value="VITAMINE B12" id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        VITAMINE B12
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input name="test_name[]" class="form-check-input" type="checkbox"
                                        value="HB ELECTROPHOROSIS" id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        HB ELECTROPHOROSIS
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input name="test_name[]" class="form-check-input" type="checkbox"
                                        value="FERRITININE" id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        FERRITININE
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input name="test_name[]" class="form-check-input" type="checkbox"
                                        value="URIC ACID" id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        URIC ACID
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input name="test_name[]" class="form-check-input" type="checkbox"
                                        value="TOTAL PROTIEN" id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        TOTAL PROTIEN
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input name="test_name[]" class="form-check-input" type="checkbox"
                                        value="ALBUMIN" id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        ALBUMIN
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input name="test_name[]" class="form-check-input" type="checkbox"
                                        value="CALCIUM" id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        CALCIUM
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input name="test_name[]" class="form-check-input" type="checkbox"
                                        value="RA FACTOR" id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        RA FACTOR
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input name="test_name[]" class="form-check-input" type="checkbox"
                                        value="PHOSPHORUS" id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        PHOSPHORUS
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input name="test_name[]" class="form-check-input" type="checkbox"
                                        value="VITAMIN D" id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        VITAMIN D
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input name="test_name[]" class="form-check-input" type="checkbox"
                                        value="PSA LEVEL" id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        PSA LEVEL
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input name="test_name[]" class="form-check-input" type="checkbox"
                                        value="SGOT" id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        SGOT
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input name="test_name[]" class="form-check-input" type="checkbox"
                                        value="SGPT" id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        SGPT
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input name="test_name[]" class="form-check-input" type="checkbox"
                                        value="SGPT" id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        FT3
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input name="test_name[]" class="form-check-input" type="checkbox"
                                        value="SGPT" id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        FT4
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input name="test_name[]" class="form-check-input" type="checkbox"
                                        value="SGPT" id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        TSH
                                    </label>
                                </div>
                            </div>
                        </div>

                    </div>
                    </div>

                    {{-- <div class="row mb-3"> --}}
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
