@include('partials.academic-header-section')

<section class="grid gap-10 py-10 lg:grid-cols-12 lg:py-14">
    <div class="space-y-8 lg:col-span-8">
        @include('partials.repository-filter-bar')
        @include('partials.scientific-papers-feed')
    </div>
    <div class="lg:col-span-4">
        @include('partials.editorial-sidebar')
    </div>
</section>
