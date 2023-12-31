
    <div class="ms-3 mb-3">
        <button type="button" class="btn btn-dark p-3 mb-3 mt-3 ">Les statistiques et les rapports globaux de l'application :</button>
    </div>
    <div class="d-flex w-100 justify-content-evenly mb-3">
        <div class="bg-dark text-light p-5 fw-bold text-start">Nombre des tickets vendus:</div>
        <div class="bg-dark text-light p-5 fw-bold">Nombre des organisateurs:</div>
        <div class="bg-dark text-light p-5 fw-bold">Nombre des Evenements:</div>
        <div class="bg-dark text-light p-5 fw-bold">Nombre des utilisateurs:</div>
    </div>
    <section>
    <div class="ms-3 mb-3">
        <button type="button" class="btn btn-dark p-3 ">Gérer les utilisateurs et leurs accès à l'application:</button>
    </div>
    <div class="ms-4">
        <button type="button" class="btn btn-danger">Backlist</button>
        <button type="button" class="btn btn-success">Ajouter un utilisateur</button>
    </div>
    <div>
    <table class="table">
  <thead>
    <tr>
      <th scope="col">Full name</th>
      <th scope="col">Email</th>
      <th scope="col">Phone</th>
      <th scope="col">Role</th>
      <th scope="col">More</th>
    </tr>
  </thead>
    <tbody>
        <?php
        foreach ($data as $user){?>
        <th scope="col"><?= $user['fullName'] ?></th>
        <td><?= $user['email'] ?></td>
        <td><?= $user['phone'] ?></td>
        <td><?= $user['id_role'] ?></td>
        <td>
        <a href=""><button class="btn btn-sm btn-outline-success mb-4">Update</button></i></a>
        <form method="post" action="delete" style="display: inline-block">
                    <input  type="hidden" name="id_user" value="<?=$user['id_user']?>"/>
                    <button type="submit" class="btn btn-sm btn-outline-danger">Delete</button>
                </form>
        </td>

    
    </tbody>
    <?php }?>

   
   

    
        </tbody>
        </table>
</div>
