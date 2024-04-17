@extends('admin.layouts.master', [
'page_header' => __('التقارير'),
])

@section('content')
<div class="row">
    <div class="col-12 col-lg-12">
        <div class="row">
            <div class="col-6 col-lg-3 col-md-6 text-center">
                <a href="{{ route('reports.products') }}">
                    <div class="card">
                        <div class="card-body px-4 py-4-5">
                            <div class="row">
                                <div class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-start ">
                                    <div class="stats-icon green mb-2">
                                        <i class="bi bi-basket" style="margin-bottom: 50%;
                                        margin-left: 25%;"></i>
                                    </div>
                                </div>


                                <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                                    <h6 class="text-muted font-semibold">{{ __('ارصدة المنتجات') }}</h6>
                                    {{-- <h6 class="font-extrabold mb-0">{{ $dataCounts['admins'] }}</h6> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-6 col-lg-3 col-md-6 text-center">
                <a href="{{ route('reports.dealing') }}">
                    <div class="card">
                        <div class="card-body px-4 py-4-5">
                            <div class="row">
                                <div class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-start ">
                                    <div class="stats-icon black mb-2">
                                        <i class="bi bi-people-fill" style="margin-bottom: 50%;

                                        margin-left: 25%;"></i>
                                    </div>
                                </div>


                                <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                                    <h6 class="text-muted font-semibold">{{ __('التعامل مع العملاء') }}</h6>
                                    {{-- <h6 class="font-extrabold mb-0">{{ $dataCounts['admins'] }}</h6> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            
 <div class="col-6 col-lg-3 col-md-6 text-center">
     <a href="{{ route('reports.salaries') }}">
         <div class="card">
             <div class="card-body px-4 py-4-5">
                 <div class="row">
                     <div class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-start ">
                         <div class="stats-icon purple mb-2">

                             <i class="bi bi-cash-coin" style="margin-bottom: 50%;

                                        margin-left: 25%;"></i>
                         </div>
                     </div>


                     <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                         <h6 class="text-muted font-semibold">{{ __('المدفوعات') }}</h6>
                     </div>
                 </div>
             </div>
         </div>
     </a>
 </div>

 <div class="col-6 col-lg-3 col-md-6 text-center">
     <a href="{{ route('reports.products.min') }}">
         <div class="card">
             <div class="card-body px-4 py-4-5">
                 <div class="row">
                     <div class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-start ">
                         <div class="stats-icon red mb-2">
                             <i class="bi bi-bag-dash-fill" style="margin-bottom: 50%;

                                        margin-left: 25%;"></i>
                         </div>
                     </div>


                     <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                         <h6 class="text-muted font-semibold">{{ __('منتجات وصلت للحد الادنى') }}</h6>
                     </div>
                 </div>
             </div>
         </div>
     </a>
 </div>

<div class="col-6 col-lg-3 col-md-6 text-center">
    <a href="{{ route('buying-products.index') }}">

        <div class="card">
            <div class="card-body px-4 py-4-5">
                <div class="row">
                    <div class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-start ">
                        <div class="stats-icon blue mb-2">
                            <i class="bi bi-cart-check" style="margin-bottom: 50%;
                                        margin-left: 25%;"></i>
                        </div>
                    </div>

                    <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                        <h6 class="text-muted font-semibold">{{ __('عمليات الشراء') }}</h6>
                    </div>
                </div>
            </div>
        </div>
    </a>
</div>



        </div>
    </div>
</div>


@stop
