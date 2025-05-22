<form method="POST" action="{{ $action }}">
    @csrf
    @if($isEdit)
        @method('PUT')
    @endif

    <label>Company Name:</label>
    <input type="text" name="company_name" value="{{ old('company_name', $application->company_name ?? '') }}" required><br>

    <label>Role:</label>
    <input type="text" name="role" value="{{ old('role', $application->role ?? '') }}" required><br>

    <label>Status:</label>
    <select name="status" required>
        @foreach(['applied','interview','offer','rejected'] as $status)
            <option value="{{ $status }}" @selected(old('status', $application->status ?? '') == $status)> {{ ucfirst($status) }} </option>
        @endforeach
    </select><br>

    <label>Applied Date:</label>
    <input type="date" name="applied_date" value="{{ old('applied_date', $application->applied_date ?? '') }}" required><br>

    <label>Interview Date:</label>
    <input type="date" name="interview_date" value="{{ old('interview_date', $application->interview_date ?? '') }}"><br>

    <label>Notes:</label>
    <textarea name="notes">{{ old('notes', $application->notes ?? '') }}</textarea><br>

    <button type="submit">{{ $isEdit ? 'Update' : 'Create' }}</button>
</form>