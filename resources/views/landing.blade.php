@extends("templates.keyframe-base")

@section("page-description")
    Professional CSS-animations
@endsection

@section("page-content")
    <x-landing-cover
        title="Professional CSS animations"
        subtitle="{{ config('app.name') }} contains animations for text, notifications, and blocks. Just copy and paste!"
    ></x-landing-cover>
@endsection
