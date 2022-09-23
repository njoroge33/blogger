
$( document ).ready(function() {
    
  var table = $('.data-table').DataTable({
      processing: true,
      serverSide: true,
      // ajax: "",
      columns: [
          {data: 'article_id', name: 'article_id'},
          {data: 'title', name: 'title'},
          // {data: 'image_url', name: 'image'},
          {data: 'image', name: 'image', orderable: false, searchable: false},
          {data: 'created_at', name: 'created_at'},
          
          {data: 'action', name: 'action', orderable: false, searchable: false},
      ]
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

