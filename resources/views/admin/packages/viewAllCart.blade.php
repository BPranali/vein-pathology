@include('includes.sidebar')
<main id="main" class="main">

    <div class="pagetitle">
        <h1>Dashboard</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item active">Dashboard</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
        <div class="row">
            <div class="card table-responsive rounded py-4 text-center"
            style="box-shadow: rgba(60, 64, 67, 0.3) 0px 1px 2px 0px, rgba(60, 64, 67, 0.15) 0px 2px 6px 2px;">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th scope="col">SR.No</th>
                       
                 
                        <th scope="col">Product Image</th>
                        <th scope="col">Product Name</th>
                        <th scope="col">Include Test</th>
                        <th scope="col">charges</th>
                        <th scope="col">Action</th>
                      
                        {{-- <th scope="col">Chemical</th> --}}
                        {{-- <th scope="col">Category</th> --}}
                        {{-- <th scope="col">Action</th> --}}
                    </tr>
                </thead>
                <tbody>
                    <?php $n=1; ?>
                  
                    @foreach ($cartItems as $item)
                        <tr>
                            <td scope="row">{{ $n }}
                            </td>
                           

                            {{-- @foreach ((array) $item->doc as $property)
                        <th>{{ $property->doc->name }}<th>
                        @endforeach --}}


                            <td> <img src="/images/package/{{ $item->image }}" width="120px" class="rounded"
                                    alt=""></td>
                            <td>{{ $item->packages }}</td>
                            <td>{{ $item->include_test }}</td>
                            <td>{{ $item->charges }}</td>

                        

                           

                      
                            <td>
                                <form action="{{ route('admin.product.delete', $item->id) }}" method="POST">

                                    {{-- <a class="btn btn-primary" href="{{ route('admin.product.edit', $item->id) }}"><i
                                            class="bi bi-pencil-square"></i></a> --}}

                                    @csrf
                                    @method('DELETE')

                                    <button type="submit" class="btn btn-danger"><i
                                            class="bi bi-trash3-fill"></i></button>
                                </form>
                            </td>
                            <?php $n++; ?>
                         
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

            <!-- Right side columns -->

        </div>
    </section>

</main><!-- End #main -->
@include('includes.footer')
