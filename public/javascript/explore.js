var paginate = 1;
var dataExplore = [];
loadMoreData(paginate);
$(window).scroll(function () {
    if ($(window).scrollTop() + $(window).height() >= $(document).height()) {
        paginate++;
        loadMoreData(paginate);
    }
});

function loadMoreData(paginate) {
    $.ajax({
        url: window.location.origin +"/getDataExplore/"+ "?page=" + paginate,
        type: "GET",
        dataType: "JSON",
        success: function(e){
            console.log(e);
            e.data.data.map((x)=>{
                var hasilPencarian = x.likefoto.filter(function(hasil){
                    return hasil.id_user === e.idUser
                })
                if(hasilPencarian.length <= 0){
                    userlike = 0;
                }else{
                    userlike = hasilPencarian[0].id_user;
                }
                let datanya = {
                    id: x.id,
                    judul: x.judul_foto,
                    deskripsi: x.deskripsi_foto,
                    foto: x.url,
                    tanggal: x.created_at,
                    jml_comment: x.comments_count,
                    jml_like: x.likefoto_count,
                    idUserLike: userlike,
                    useractive: e.idUser,
                }
                dataExplore.push(datanya);
                console.log(userlike)
                console.log(e.idUser)
            });
            getExplore();
        },
        error: function(jqXHR, textStatus, errorThrown) {},
    });


const getExplore =()=>{
    $('#exploredata').html("");
    dataExplore.map((x, i) => {
        $('#exploredata').append(
        `
        <div class="flex mt-2 bg-white">
        <div class="flex flex-col px-2">
            <a href="/exploredetail/${x.id}">
                <div class="w-[363px] h-[192px] bg-bgcolor2 overflow-hidden">
                    <img src="/assets/${x.foto}" alt="" class="w-full transition duration-500 ease-in-out hover:scale-105">
                </div>
            </a>
            <div class="flex flex-wrap items-center justify-between px-2 mt-2">
                <div>
                    <div class="flex flex-col">
                        <div>
                            ${x.judul}
                        </div>
                        <div class="text-xs text-abuabu">
                            ${x.tanggal}
                        </div>
                    </div>
                </div>
                <div>
                    <span class="bi ${x.userFavorite === x.useractive ? 'bi-tag-fill' : 'bi-tag'} bi-tag" onclick="pinned(this, ${x.id})"></span>
                    <small>${x.jml_comment}</small>
                    <span class="bi bi-chat-left-text"></span>
                    <small>${x.jml_like}</small>
                    <span class="bi ${x.idUserLike === x.useractive ? 'bi-heart-fill text-red-800' : 'bi-heart'} bi-heart" onclick="likes(this, ${x.id})"></span>
                </div>
            </div>
        </div>
    </div>
        `
        )
    });
}
}
function likes(txt, id){
    $.ajax({
        url: window.location.origin +'/likefotos',
        dataType: "JSON",
        type: "POST",
        data: {
            _token: $('input[name="_token"]').val(),
            idfoto: id
        },
        success: function(res){
            console.log(res);
        },
        error: function(jqXHR, textStatus, errorThrown){
            alert('gagal');
        },
    })
}

function pinned(txt, id){
    $.ajax({
        url: window.location.origin +'/pinned',
        dataType: "JSON",
        type: "POST",
        data: {
            _token: $('input[name="_token"]').val(),
            idfoto: id
        },
        success: function(res){
            console.log(res);
        },
        error: function(jqXHR, textStatus, errorThrown){
            alert('gagal');
        },
    })
}

