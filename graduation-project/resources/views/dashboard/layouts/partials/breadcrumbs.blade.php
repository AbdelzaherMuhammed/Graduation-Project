@if (count($breadcrumbs))

    <div class="page-title">
        <div class="row">
            <div class="col-sm-6">

                <ol class="breadcrumb pt-0 pr-0 float-left float-sm-right ">
                    @foreach ($breadcrumbs as $breadcrumb)

                        @if ($breadcrumb->url && !$loop->last)
                            <li class="breadcrumb-item"><a href="{{ $breadcrumb->url }}"> {{ $breadcrumb->title }}</a></li>
                            <li></li>
                        @else
                            <li class="breadcrumb-item active"><a href="#"> {{ $breadcrumb->title }} </a></li>
                        @endif

                    @endforeach
                </ol>
            </div>
        </div>
    </div>
@endif
<!-- breadcrumb -->