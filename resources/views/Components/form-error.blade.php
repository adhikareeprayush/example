@props(['name'])

@error($name)
    <div class="font-semibold text-xs text-red-500">{{ $message }}</div>
@enderror
