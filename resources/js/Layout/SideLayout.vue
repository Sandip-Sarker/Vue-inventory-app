<template>
    <div>
        <div id="sideNavRef" class="side-nav-open">

            <a href="{{route('dashboard')}}" class="side-bar-item">
                <i class="bi bi-graph-up"></i>
                <span class="side-bar-item-caption text-primary">Dashboard</span>
            </a>

            <a href="{{route('customer.index')}}" class="side-bar-item">
                <i class="bi bi-people"></i>
                <span class="side-bar-item-caption">Customer</span>
            </a>

            <a href="{{route('category.index')}}" class="side-bar-item">
                <i class="bi bi-list-nested"></i>
                <span class="side-bar-item-caption">Category</span>
            </a>

            <a href="{{route('product.index')}}" class="side-bar-item">
                <i class="bi bi-bag"></i>
                <span class="side-bar-item-caption">Product</span>
            </a>

            <a href="{{route('sale.create')}}" class="side-bar-item">
                <i class="bi bi-currency-dollar"></i>
                <span class="side-bar-item-caption">Create Sale</span>
            </a>

            <a href="{{route('invoice.page')}}" class="side-bar-item">
                <i class="bi bi-receipt"></i>
                <span class="side-bar-item-caption">Invoice</span>
            </a>

            <a href="{{route('report.page')}}" class="side-bar-item">
                <i class="bi bi-file-earmark-bar-graph"></i>
                <span class="side-bar-item-caption">Report</span>
            </a>
        </div>


    </div>
</template>

<script setup>
    import { Link } from '@inertiajs/vue3';
</script>

<style scoped>

</style>
