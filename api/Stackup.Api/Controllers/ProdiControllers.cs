using Microsoft.AspNetCore.Mvc;
using Microsoft.Extensions.Configuration;
using System.Data;

[Route("api/[controller]")]
[ApiController]

public class ProdiController : ControllerBase {
    private readonly DbManager_Prodi _dbManager;
    Response response = new Response();

    public ProdiController(IConfiguration configuration){
        _dbManager = new DbManager_Prodi(configuration);
    }


    //GET
    [HttpGet]
    public IActionResult GetAllProdi(){
        try{
            response.status = 200;
            response.message = "Succes";
            response.data = _dbManager.GetAllProdi();
        }catch(Exception ex) {
            response.status = 500;
            response.message = ex.Message;
        }
        return Ok(response);
    }


    //CREATE-Post
    [HttpPost]
    public IActionResult CreateProdi([FromBody] Prodi prodi){
        try{
            response.status = 200;
            response.message = "Succes";
            _dbManager.CreateProdi(prodi);
        }catch(Exception ex) {
            response.status = 500;
            response.message = ex.Message;
        }
        return Ok(response);
    }



    //UPDATE by Id -Put
    [HttpPut("{id}")]
    public IActionResult UpdateProdi(int id, [FromBody] Prodi prodi){
        try{
            response.status = 200;
            response.message = "Succes";
            _dbManager.UpdateProdi(id, prodi);
        }catch(Exception ex) {
            response.status = 500;
            response.message = ex.Message;
        }
        return Ok(response);
    }



    //DELETE 
    [HttpDelete("{id}")]
    public IActionResult DeleteProdi(int id){
        try{
            response.status = 200;
            response.message = "Succes";
            _dbManager.DeleteProdi(id);
        }catch(Exception ex) {
            response.status = 500;
            response.message = ex.Message;
        }
        return Ok(response);
    }
}

// Mukhamad_Viko_Ramayudha