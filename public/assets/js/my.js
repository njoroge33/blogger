
$( document ).ready(function() {
  if($(location).attr("pathname")=="/backend/blogs/index"){
 
    var table_columns =[
      {data: 'article_id', name: 'article_id'},
      {data: 'title', name: 'title'},
      // {data: 'image_url', name: 'image'},
      {data: 'image', name: 'image', orderable: false, searchable: false},
      {data: 'created_at', name: 'created_at'},
      
      {data: 'action', name: 'action', orderable: false, searchable: false},
  ]
}else if($(location).attr("pathname")=="/backend/testimonies/index"){
  var table_columns =[
    {data: 'testimony_id', name: 'testimony_id'},
    {data: 'testimony_body', name: 'testimony_body'},
    // {data: 'image_url', name: 'image'},
    {data: 'testimony_owner', name: 'testimony_owner'},
    {data: 'created_at', name: 'created_at'},
    
    {data: 'action', name: 'action', orderable: false, searchable: false},
]
}
  var table = $('.data-table').DataTable({
      processing: true,
      serverSide: true,
      // ajax: "",
      columns: table_columns,
  });
});

var Size = Quill.import('attributors/style/size');
Quill.register(Size, true);

var quill = new Quill('#editor', {
modules: {
        toolbar: [
            [{
                header: [1, 2, false]
            }],
            ['bold', 'italic', 'underline'],
            ['image', 'code-block']
        ]
    },
    placeholder: 'Type your text here...',
    theme: 'snow'
  });
var form = document.querySelector('form');
form.onsubmit = function() {
  var about = document.querySelector('input[name=content]');
  about.value =  quill.root.innerHTML;;
  
  console.log("Submitted", $(form).serialize(), $(form).serializeArray());
  
  return true;
};

