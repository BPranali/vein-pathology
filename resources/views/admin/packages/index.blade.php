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
                    <h5 class="card-title">Package</h5>

                    <a href="{{ route('admin.packages.create') }}" class="btn btn-outline-primary"> Add Package</a>

                    
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
                                <th scope="col">packages</th>
                                <th scope="col">Include Test</th>
                                <th scope="col">Total Charges</th>
                                <th scope="col">Start Date</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($packages as $item)
                                <tr>
                                    <td>{{ $item->id }}</td>
                                    <td> <img src="/images/package/{{ $item->image }}" width="92px" height="52px" class="rounded" alt=""> </td>
                                    <td>{{ $item->packages }}</td>
                                    <td>{{ $item->include_test }}</td>
                                    <td>{{ $item->charges }}</td>
                                    <td>
                                        <a href="{{ route('admin.packages.edit',$item->id) }}" class="btn btn-outline-info">Edit</a>
                               
                                        <a href="{{ route('admin.packages.delete',$item->id) }}" class="btn btn-outline-danger">Delete</a>
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
