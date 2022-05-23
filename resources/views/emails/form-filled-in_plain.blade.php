Here are the details

@foreach($fields as $field)
    {{ $field['display'] }}: {{ $field['value'] }}
@endforeach

Thanks,
{{ config('app.name') }}
