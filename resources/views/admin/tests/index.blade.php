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
                    <h5 class="card-title">Test</h5>

                    <a href="{{ route('admin.tests.create') }}" class="btn btn-outline-primary"> Add Test</a>

                    
                    <!-- Table with stripped rows -->
                    @if ($message = Session::get('msg'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <i class="bi bi-check-circle me-1"></i>
                        <strong>{{ $message }}</strong>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Image</th>
                                <th scope="col">Test Name</th>
                                <th scope="col">Discription</th>
                                <th scope="col">Price </th>
                                <th scope="col">Discount </th>
                                {{-- <th scope="col">Total Charges</th> --}}
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($tests as $value)
                                <tr>
                                    <td>{{ $value->id }}</td>
                                    <td> <img src="/image1/test/{{ $value->image }}" width="92px" height="52px" class="rounded" alt=""> </td>
                                    <td>{{ $value->tests }}</td>
                                    <td>{{ $value->description }}</td>
                                    <td>{{ $value->charges }}</td>
                                   
                                    <td>{{ $value->discount }}</td>
                                    <td>
                                        <a href="{{ route('admin.tests.edit',$value->id) }}" class="btn btn-outline-info">Edit</a>
                               
                                        <a href="{{ route('admin.tests.delete',$value->id) }}" class="btn btn-outline-danger">Delete</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <!-- End Table with stripped rows -->

                </div>
            </div>
    </section>



</main><!-- End #main -->
@include('includes.footer')
