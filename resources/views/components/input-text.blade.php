<div>
    @props(['property', 'required' => false])

    <!-- Very little is needed to make a happy life. - Marcus Aurelius -->

    <input type="text" name="{{ $property }}" id="{{ $property }}" {{ $required ? 'required' : '' }}>
    class="form-control @error($property) is-invalid @enderror"
    value="{{ old($property) }}" />

    @error($property)
    <span class="invalid-feedback" role="alert">
    <strong>{{ $message }}</strong>
    </span>

    @enderror
{{ $slot }}

</div>
