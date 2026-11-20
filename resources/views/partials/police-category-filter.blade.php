<strong style="font-size:12px;">Category:</strong>
@foreach (\App\Models\Police::CATEGORIES as $category)
    <label style="display:block;font-size:13px;">
        <input type="checkbox" name="policeCategory" value="{{ $category }}">
        {{ $category }} (<span data-police-category-count>0</span>)
    </label>
@endforeach
