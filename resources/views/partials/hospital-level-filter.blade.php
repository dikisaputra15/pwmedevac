<strong style="font-size:12px;">Facility Level:</strong>
@foreach (\App\Models\Hospital::FACILITY_LEVELS as $level)
    <label style="display:block;font-size:13px;">
        <input type="checkbox" name="hospitalLevel" value="{{ $level }}">
        {{ $level }} (<span data-hospital-level-count>0</span>)
    </label>
@endforeach
