<template>
        <!-- NavLayout -->
        <NavLayout></NavLayout>
         <!-- NavLayout -->

        <!-- NavLayout -->
        <SideLayout> </SideLayout>
        <!-- NavLayout -->

        <!-- Main Content Start -->
        <MainContentLayout>
            <div class="container-fluid">
                <div class="row">

                    <div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 col-12 animated fadeIn p-2">
                        <div class="card card-plain h-100 bg-white">
                            <div class="p-3">
                                <div class="row">
                                    <div class="col-9 col-lg-8 col-md-8 col-sm-9">
                                        <div>
                                            <h5 class="mb-0 text-capitalize font-weight-bold">
                                                <span id="product"></span>
                                            </h5>
                                            <p class="mb-0 text-sm">Product</p>
                                        </div>
                                    </div>
                                    <div class="col-3 col-lg-4 col-md-4 col-sm-3 text-end">
                                        <div class="icon icon-shape bg-gradient-primary shadow float-end border-radius-md">
                                            <img class="w-100 h-50" src="../Assets/images/product2.jpg"/>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 col-12 animated fadeIn p-2">
                        <div class="card card-plain h-100 bg-white">
                            <div class="p-3">
                                <div class="row">
                                    <div class="col-9 col-lg-8 col-md-8 col-sm-9">
                                        <div>
                                            <h5 class="mb-0 text-capitalize font-weight-bold">
                                                <span id="category"></span>
                                            </h5>
                                            <p class="mb-0 text-sm">Category</p>
                                        </div>
                                    </div>
                                    <div class="col-3 col-lg-4 col-md-4 col-sm-3 text-end">
                                        <div class="icon icon-shape bg-gradient-primary shadow float-end border-radius-md">
                                            <img class="w-100 " src="../Assets/images/category.png"/>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 col-12 animated fadeIn p-2">
                        <div class="card card-plain h-100 bg-white">
                            <div class="p-3">
                                <div class="row">
                                    <div class="col-9 col-lg-8 col-md-8 col-sm-9">
                                        <div>
                                            <h5 class="mb-0 text-capitalize font-weight-bold">
                                                <span id="customer"></span>
                                            </h5>
                                            <p class="mb-0 text-sm">Customer</p>
                                        </div>
                                    </div>
                                    <div class="col-3 col-lg-4 col-md-4 col-sm-3 text-end">
                                        <div class="icon icon-shape bg-gradient-primary shadow float-end border-radius-md">
                                            <img class="w-100 " src="../Assets/images/customer.png"/>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 col-12 animated fadeIn p-2">
                        <div class="card card-plain h-100  bg-white">
                            <div class="p-3">
                                <div class="row">
                                    <div class="col-9 col-lg-8 col-md-8 col-sm-9">
                                        <div>
                                            <h5 class="mb-0 text-capitalize font-weight-bold">
                                                <span id="invoice"></span>
                                            </h5>
                                            <p class="mb-0 text-sm">Invoice</p>
                                        </div>
                                    </div>
                                    <div class="col-3 col-lg-4 col-md-4 col-sm-3 text-end">
                                        <div class="icon icon-shape bg-gradient-primary shadow float-end border-radius-md">
                                            <img class="w-100 " src="../Assets/images/invoice3.png"/>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 col-12 animated fadeIn p-2">
                        <div class="card card-plain h-100 bg-white">
                            <div class="p-3">
                                <div class="row">
                                    <div class="col-9 col-lg-8 col-md-8 col-sm-9">
                                        <div>
                                            <h5 class="mb-0 text-capitalize font-weight-bold">
                                                $ <span id="total"></span>
                                            </h5>
                                            <p class="mb-0 text-sm">Total Sale</p>
                                        </div>
                                    </div>
                                    <div class="col-3 col-lg-4 col-md-4 col-sm-3 text-end">
                                        <div class="icon icon-shape bg-gradient-primary shadow float-end border-radius-md">
                                            <img class="w-100 " src="../Assets/images/sale.png"/>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 col-12 animated fadeIn p-2">
                        <div class="card card-plain h-100  bg-white">
                            <div class="p-3">
                                <div class="row">
                                    <div class="col-9 col-lg-8 col-md-8 col-sm-9">
                                        <div>
                                            <h5 class="mb-0 text-capitalize font-weight-bold">
                                                $ <span id="vat"></span>
                                            </h5>
                                            <p class="mb-0 text-sm">Vat Collection</p>
                                        </div>
                                    </div>
                                    <div class="col-3 col-lg-4 col-md-4 col-sm-3 text-end">
                                        <div class="icon icon-shape bg-gradient-primary shadow float-end border-radius-md">
                                            <img class="w-100 " src="../Assets/images/vat2.png"/>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 col-12 animated fadeIn p-2">
                        <div class="card card-plain h-100  bg-white">
                            <div class="p-3">
                                <div class="row">
                                    <div class="col-9 col-lg-8 col-md-8 col-sm-9">
                                        <div>
                                            <h5 class="mb-0 text-capitalize font-weight-bold">
                                                $ <span id="payable"></span>
                                            </h5>
                                            <p class="mb-0 text-sm">Total Collection</p>
                                        </div>
                                    </div>
                                    <div class="col-3 col-lg-4 col-md-4 col-sm-3 text-end">
                                        <div class="icon icon-shape bg-gradient-primary shadow float-end border-radius-md">
                                            <img class="w-100 " src="../Assets/images/total-sales-1.png"/>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </MainContentLayout>
        <!-- Main Content End -->
</template>

<script setup>
    import { Link } from '@inertiajs/vue3'
    import SideLayout from "../Layout/SideLayout.vue"
    import NavLayout from "../Layout/NavLayout.vue"
    import MainContentLayout from "../Layout/MainContentLayout.vue"
</script>

<style scoped>
</style>
