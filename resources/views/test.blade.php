<x-guest-layout>

            <!-- BEGIN: Title -->
            <div class="bg-amber-500 text-white p-5 m-5 text-center text-3xl uppercase">
            test page
            </div>
            <!-- END: Title -->


            <!-- BEGIN: TW-Elements, Carousel -->
            <div id="carouselExampleCaptions" class="carousel slide relative" data-bs-ride="carousel">
                <div class="carousel-indicators absolute right-0 bottom-0 left-0 flex justify-center p-0 mb-4">
                    <button
                    type="button"
                    data-bs-target="#carouselExampleCaptions"
                    data-bs-slide-to="0"
                    class="active"
                    aria-current="true"
                    aria-label="Slide 1"
                    ></button>
                    <button
                    type="button"
                    data-bs-target="#carouselExampleCaptions"
                    data-bs-slide-to="1"
                    aria-label="Slide 2"
                    ></button>
                    <button
                    type="button"
                    data-bs-target="#carouselExampleCaptions"
                    data-bs-slide-to="2"
                    aria-label="Slide 3"
                    ></button>
                </div>

                <div class="carousel-inner relative w-full overflow-hidden">

                    <div class="carousel-item active relative float-left w-full">
                        <img
                            src="https://mdbootstrap.com/img/Photos/Slides/img%20(15).jpg"
                            class="block w-full"
                            alt="..."
                        />
                        <div class="carousel-caption hidden md:block absolute text-center">
                            <h5 class="text-xl">First slide label</h5>
                            <p>Some representative placeholder content for the first slide.</p>
                        </div>
                    </div>

                    <div class="carousel-item relative float-left w-full">
                        <img
                            src="https://mdbootstrap.com/img/Photos/Slides/img%20(22).jpg"
                            class="block w-full"
                            alt="..."
                        />
                        <div class="carousel-caption hidden md:block absolute text-center">
                            <h5 class="text-xl">Second slide label</h5>
                            <p>Some representative placeholder content for the second slide.</p>
                        </div>
                    </div>

                    <div class="carousel-item relative float-left w-full">
                        <img
                            src="https://mdbootstrap.com/img/Photos/Slides/img%20(23).jpg"
                            class="block w-full"
                            alt="..."
                        />
                        <div class="carousel-caption hidden md:block absolute text-center">
                            <h5 class="text-xl">Third slide label</h5>
                            <p>Some representative placeholder content for the third slide.</p>
                        </div>
                    </div>
                </div>

                <button
                    class="carousel-control-prev absolute top-0 bottom-0 flex items-center justify-center p-0 text-center border-0 hover:outline-none hover:no-underline focus:outline-none focus:no-underline left-0"
                    type="button"
                    data-bs-target="#carouselExampleCaptions"
                    data-bs-slide="prev"
                >
                    <span class="carousel-control-prev-icon inline-block bg-no-repeat" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>

                <button
                    class="carousel-control-next absolute top-0 bottom-0 flex items-center justify-center p-0 text-center border-0 hover:outline-none hover:no-underline focus:outline-none focus:no-underline right-0"
                    type="button"
                    data-bs-target="#carouselExampleCaptions"
                    data-bs-slide="next"
                >
                    <span class="carousel-control-next-icon inline-block bg-no-repeat" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
            <!-- END: TW-Elements, Carousel -->


            <!-- BEGIN: DataTables -->
            <div class="m-5 p-5 rounded-lg shadow-lg border">
                <table id="master_tbl" class="pt-3 text-gray-500 text-sm row-border">
                    <thead class="">
                        <tr>
                            <th>ID</th>
                            <th>Full Name</th>
                            <th>Email</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Juan dela Cruz</td>
                            <td>juan@email.com</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <!-- END: DataTables -->







    @push('styles')
<!-- Styles TW-Elements -->
        <link rel="stylesheet" href="{{ asset('/css/index.min.css') }}">

        <!-- Styles DataTables -->
        <link rel="stylesheet" type="text/css" href="{{asset('plugins/DataTables/datatables.min.css')}}" />
    @endpush

    @push('scripts')
<!-- Script TW-Elements -->
        <script text="text/javascript" src="{{ asset('/js/index.min.js') }}"></script>

        <!-- Script Datatables -->
        <script type="text/javascript" src="{{asset('plugins/DataTables/datatables.min.js')}}" ></script>

        <!-- BEGIN: Custom Script DataTables -->
        <script type="text/javascript">
            $(function() {
                $("#master_tbl").DataTable(
                    {
                        paging: true,
                        scrollY: 200,
                        scrollCollapse: true,
                        pageLength: 100,
                        pagingType: "full_numbers",
                        responsive: true,
                        columnDefs: [
                            {targets: 0, className: 'dt-body-right'},
                            {targets: 1, className: 'dt-body-center'},
                            {targets: 2, className: 'dt-body-center'},
                        ],  
                    }
                );
            });
        </script>
        <!-- END: Custom Script DataTables -->
    @endpush



</x-guest-layout>