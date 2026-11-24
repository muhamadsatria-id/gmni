@include('partials.calendar-header-section')
@include('partials.calendar-status-banner')
@include('partials.calendar-filter-bar')

<section class="grid gap-10 py-10 lg:grid-cols-12">
    <div class="lg:col-span-8">
        @include('partials.monthly-calendar-grid')
    </div>
    <div class="space-y-6 lg:col-span-4">
        @include('partials.calendar-sidebar-section')
    </div>
</section>
