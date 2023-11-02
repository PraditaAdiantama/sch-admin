<form class="input-group mb-3" action="{{ $action }}" method="GET" style="width: 15rem">
    <button class="btn bg-white border border-end-0" type="submit" id="button-addon1">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
            style="fill: rgba(0, 0, 0, 1);transform: ;msFilter:;">
            <path
                d="M10 18a7.952 7.952 0 0 0 4.897-1.688l4.396 4.396 1.414-1.414-4.396-4.396A7.952 7.952 0 0 0 18 10c0-4.411-3.589-8-8-8s-8 3.589-8 8 3.589 8 8 8zm0-14c3.309 0 6 2.691 6 6s-2.691 6-6 6-6-2.691-6-6 2.691-6 6-6z">
            </path>
        </svg>
    </button>
    <input type="text" name="{{ $name }}" class="form-control border-start-0"
        placeholder="{{ $placeholder }}" aria-label="Example text with button addon" aria-describedby="button-addon1">
</form>
