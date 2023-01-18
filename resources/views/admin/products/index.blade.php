@extends('layouts.admin')

@section('content')

    <body>


        <h1>Products </h1>

        @if (session('message'))
            <div class="alert alert-success">
                {{ session('message') }}

            </div>
        @endif


        <div class="table-responsive">
            <table class="table table-striped
    table-hover
    table-borderless
    table-primary
    align-middle">
                <thead class="table-light">
                    <tr>
                        <th>Id</th>
                        <th>Name</th>
                        <th>Image</th>
                        <th>slug</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody class="table-group-divider">
                    @forelse($products as $product)
                        <tr class="table-primary">
                            <td scope="row">{{ $product->id }}</td>
                            <td>{{ $product->name }}</td>
                            <td>
                                <img src="{{ $product->name }}" alt="">
                            </td>
                            <td>{{ $product->slug }}</td>

                            <td>
                                <a class="btn btn-prymary btn-sm" href="{{ route('admin.products.show', $product->slug) }}"
                                    role="button">
                                    <i class="fas fa-eye fa-sm fa-fw"></i>
                                </a>

                                <a class="btn btn-secondary btn-sm"
                                    href="{{ route('admin.products.edit', $product->slug) }}" role="button">
                                    <i class="fas fa-pencil fa-sm fa-fw"></i>
                                </a>


                                <!-- Modal trigger button -->
                                <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal"
                                    data-bs-target="#product-{{ $product->id }}">

                                    <i class="fas fa-trash fa-sm fa-fw"></i>
                                </button>



                            </td>
                        </tr>
                    @empty
                        <tr class="table-primary">
                            <td scope="row">Sorry no records to show</td>
                        </tr>
                    @endforelse

                </tbody>
                <tfoot>

                </tfoot>
            </table>

        </div>




        @include('partials.footer')

    </body>
@endsection
