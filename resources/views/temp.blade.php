$filename =  $request->file('image')->getClientOriginalName();

$filename_without_ext = pathinfo($filename, PATHINFO_FILENAME);

$filename_extention_only = $request->file('image')->getClientOriginalExtension();
//Jut another way of getting the file extention
$filename_extention_usingPathinfo = pathinfo($filename, PATHINFO_EXTENSION);

$filename_name_to_store = $filename_without_ext . '-' . time() . '.' . $filename_extention_only;

$filetoupload = $request->file('image')->storeAs('public/image', $filename_name_to_store);

$request->user()->posts()->create([
    'body' => $request->body,
    'userimage' => $filename_name_to_store
]);

<span style="margin-left:-12px">{{ $cart }}</span>