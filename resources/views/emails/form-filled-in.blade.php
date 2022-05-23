@component('mail::message')
# Here are the details

{{-- Remember, no indents allowed in markdown --}}
@foreach($fields as $field)
**{{ $field['display'] }}**: {{ $field['value'] }}<br>
@endforeach

Thanks,<br>
{{ config('app.name') }}
@endcomponent
