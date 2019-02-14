<?php include("partial/header.php"); ?>
      
        <section class="billboard">
            <div><img src="images/slides/slide1.jpg" alt="" /></div>
            <div><img src="images/slides/slide2.jpg" alt="" /></div>
            <div><img src="images/slides/slide3.jpg" alt="" /></div>
        </section>
       
        <section class="py-5">
            <div class="container">
                <div class="row">
                
            <?php
            // User Input
            $is_published=true;
            $limit=3;
            // Query
            $sql="SELECT * FROM blogs WHERE  is_published=? LIMIT ?";
            $stmt=$pdo->prepare($sql);
            $stmt->execute([$is_published,$limit]);
            $blogs=$stmt->fetchAll();
            foreach ($blogs as $blog) {  ?>
                <div class="col-lg-4">
                <div class="card ">
                <img
                    class="card-img-top"
                    src="images/blogimg/blogimg1.jpg"
                    alt="Card image cap"
                />
                <div class="card-body">
                    <h5 class="card-title h3">
                        <?php echo $blog->title; ?>
                    </h5>
                    <div class="content-meta mb-3">
                        <small>
                            <strong class="text-secondary">
                                LifeStyle
                            </strong>
                        </small>
                        <small class="ml-2">
                            <em class="far fa-clock"></em>
                            <?php echo $blog->created_at; ?>
                        </small>
                    </div>
                    <p class="card-text">
                    <?php echo $blog->body; ?>
                    </p>

                    <a href="#" class="btn btn-primary"
                        >Read More</a
                    >
                </div>
                </div>
                </div>
            <?php
             
            }
        // UPDATE DATA QUERY
        // $id=1;
        // $body="This is the updated post";
        // $sql="UPDATE posts SET body=:body WHERE id=:id";
        // $stmt=$pdo->prepare($sql);
        // $stmt->execute(['body'=>$body,'id'=>$id]);
        // echo 'Post Updated';

        // DELETE DATA QUERY
        // $id=4;
        // $sql="DELETE FROM posts WHERE id=:id";
        // $stmt=$pdo->prepare($sql);
        // $stmt->execute(['id'=>$id]);
        // echo 'Post Deleted';
            ?>
                   
               
               
                </div>
            </div>
        </section>
        <?php include("partial/footer.php"); ?>