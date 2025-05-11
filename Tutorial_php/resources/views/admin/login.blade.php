@include('admin.header',["page"=>"this is parameter passed"])
<h1>This is admin login page (Nested view)</h1>

<h2>content</h2>

@include('admin.footer')

<h1>check if the view is available without getting error use <u>includeIf</u></h1>
@includeIf('admin.error')