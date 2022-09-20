<form action="{{ route($routename), $post->id }}" method="POST">
   @method($method)
   @csrf

   <div class="p-4">
       <input type="text" name="title" id="title" 
          value="{{ old('title', $post->title) }}" 
          placeholder="Inserisci titolo" required
        >
   </div>
   <div class="p-4">
      <textarea name="post_image" id="post_image" cols="30" rows="10" required placeholder="Inserisci immagine">
        {{ old('post_image', $post->post_image) }} 
      </textarea>
   </div>
   <div class="p-4">
    <textarea name="post_content" id="post_content" cols="30" rows="10" required placeholder="Inserisci descrizione">
      {{ old('post_content', $post->post_content) }} 
    </textarea>
 </div>
   <div class="p-4">
      <input type="text" name="post_content" id="post_content"
           placeholder="Inserisci post" 
           value="{{ old('post_content', $post->post_content) }}"
           required
        >
   </div>
   <div class="p-4">
      <input type="date" name="post_date" id="post_date" 
          value="{{ old('post_date', $post->post_date) }}" placeholder="Inserisci data" required
       >
   </div>
   <div class="p-4">
      <button class="btn btn-primary">
          Invia
      </button>
   </div>
</form>
