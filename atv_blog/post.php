<?php 
    include_once("templates/header.php");

    if(isset($_GET['id'])){
        $postId = $_GET['id'];
        $currentPost;

        foreach($posts as $post){
            if($post['id'] == $postId){
                $currentPost = $post;
            }
        }
    }
?>
    <main class="post-container">
        <div class="content-container">
            <h1 id="main-title"><?= $currentPost['title'] ?></h1>
            <p id="post-description"><?= $currentPost['description'] ?></p>
            <div class="img-container">
                <img src="<?= $BASE_URL ?>/img/<?= $currentPost['img'] ?>" alt="<?= $currentPost['title'] ?>">
            </div>
            <p class="post-content">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Recusandae ex aspernatur ipsam voluptas cumque animi quasi repellendus atque totam, eveniet sint. Sit quae doloremque maxime, itaque reprehenderit aspernatur temporibus. Voluptatum.
            Quae provident aliquid delectus voluptas odio? Velit suscipit eveniet unde perferendis illum ad optio laborum possimus ea natus. Voluptatem facere voluptas eius eaque cupiditate maxime aut quis et tempora hic?
            Ullam deleniti, architecto magnam illo, quae blanditiis reiciendis sequi provident ipsa enim quo ex perspiciatis quidem, hic aspernatur! Commodi eveniet illum qui deleniti. Officiis accusamus quia ad, soluta pariatur ex.
            Quas beatae vero enim maxime sit ipsa tenetur, non tempora, quaerat rem recusandae exercitationem. Eaque quo tempore, commodi corporis recusandae similique nesciunt delectus, eos ut nisi molestiae, consequatur atque praesentium.
            Quidem nihil velit perferendis magnam commodi accusamus eius laudantium porro exercitationem! Delectus dolor eveniet dolore a magni aperiam! Quidem quis, porro tempore expedita necessitatibus dolorem aliquid eos perferendis quo voluptatibus?</p>
            <p class="post-content">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Recusandae ex aspernatur ipsam voluptas cumque animi quasi repellendus atque totam, eveniet sint. Sit quae doloremque maxime, itaque reprehenderit aspernatur temporibus. Voluptatum.
            Quae provident aliquid delectus voluptas odio? Velit suscipit eveniet unde perferendis illum ad optio laborum possimus ea natus. Voluptatem facere voluptas eius eaque cupiditate maxime aut quis et tempora hic?
            Ullam deleniti, architecto magnam illo, quae blanditiis reiciendis sequi provident ipsa enim quo ex perspiciatis quidem, hic aspernatur! Commodi eveniet illum qui deleniti. Officiis accusamus quia ad, soluta pariatur ex.
            Quas beatae vero enim maxime sit ipsa tenetur, non tempora, quaerat rem recusandae exercitationem. Eaque quo tempore, commodi corporis recusandae similique nesciunt delectus, eos ut nisi molestiae, consequatur atque praesentium.
            Quidem nihil velit perferendis magnam commodi accusamus eius laudantium porro exercitationem! Delectus dolor eveniet dolore a magni aperiam! Quidem quis, porro tempore expedita necessitatibus dolorem aliquid eos perferendis quo voluptatibus?</p>
        </div>
        <aside id="nav-container">
            <h3 id="tags-title">Tags</h3>
            <ul id="tag-list">
                <?php foreach($currentPost['tags'] as $tag):?>
                    <li><a href="#"><?= $tag ?></a></li>
                <?php endforeach; ?>
            </ul>
            <h3 id="categories-title">Categorias</h3>
            <ul id="categories-list">
                <?php foreach($categories as $category):?>
                    <li><a href="#"><?= $category ?></a></li>
                <?php endforeach; ?>
            </ul>
        </aside>
    </main>
<?php 
    include_once("templates/footer.php");
?>
