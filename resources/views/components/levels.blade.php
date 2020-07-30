<select name="levelRank" id="levelRank" class="custom-select">
    @foreach ($levels as $level)
        <option value="{{ $level->rank }}">{{ $level->name }}</option>
    @endforeach
</select>