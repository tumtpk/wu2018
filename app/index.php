<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.5.1/css/bulma.min.css"/>

<section class="hero is-primary is-medium">
  <div class="hero-body">
    <div class="container">
        <h1 class="title is-1">
            Hello from the other side!
        </h1>
        <h2 class="subtitle">
            WU2018
        </h2>
        <textarea id="text" class="textarea" placeholder="What's on your mind?" rows="10"></textarea>
        <a class="button is-danger" onclick="javascript:transform()">Post!</a>
    </div>
  </div>
</section>

<script>
    async function transform() {
        try {
            let textContent = document.getElementById("text").value
            console.log(textContent)
            let data = {
                content: textContent
            }
            let response = await fetch('transform.php', {
                method: 'post',
                body: JSON.stringify(data)
            })
            let result = await response.json()
            console.log(result)
        } catch (error) {
            console.error(error);
        }
        // do something
    }
</script>
