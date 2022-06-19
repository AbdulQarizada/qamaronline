using FATIHA.Application.Lookups.MenuTypes.Queries.GetMenuTypes;
using FATIHA.Application.Settings.Menus.Commands.CreateMenu;
using FATIHA.Application.Settings.Menus.Commands.DeleteMenu;
using FATIHA.Application.Settings.Menus.Commands.UpdateMenu;
using FATIHA.Application.Settings.Menus.MenuLocations.Commands.CreateMenuLocation;
using FATIHA.Application.Settings.Menus.MenuLocations.Queries.GetMenuLocations;
using FATIHA.Application.Settings.Menus.MenuRoutes.Commands.CreateMenuRoute;
using FATIHA.Application.Settings.Menus.MenuRoutes.Queries.GetMenuRoutes;
using FATIHA.Application.Settings.Menus.MenuRoutes.Queries.GetMenuRoutesByID;
using FATIHA.Application.Settings.Menus.Queries.GetMenuByID;
using FATIHA.Application.Settings.Menus.Queries.GetMenus;
using MediatR;
using Microsoft.AspNetCore.Mvc;
using Microsoft.AspNetCore.Mvc.Rendering;
using System;
using System.Collections.Generic;
using System.Linq;
using System.Threading.Tasks;

namespace FATIHA.WebUI.Controllers
{
    public class MenusController : Controller
    {
        //Start: Properties

        private IMediator _mediatR;

        //End: Properties


        //Start: Constructor 
        public MenusController(IMediator mediator)
        {
            _mediatR = mediator;
        }



        public IActionResult Index()
        {
            return View();
        }

       

        // Start: Menues
        public async Task<IActionResult> Menus()
        {
            var Menues = await _mediatR.Send(new GetMenusQuery());
            ViewBag.M = Menues.MenusViewModel;
            return View();
        }




        // for creating menues

        [HttpGet]
        public async Task<IActionResult> Create_Menu()
        {
            var MenuLocations = await _mediatR.Send(new GetMenuLocationsQuery());
            var ML = MenuLocations.MenusViewModel;
            ViewBag.ML = new SelectList(ML, "ID", "Name");


            var MainMenu = await _mediatR.Send(new GetMenusQuery());
            var MM = MainMenu.MenusViewModel;
            ViewBag.MM = new SelectList(MM, "ID", "Keyword");


            var MenuRoute = await _mediatR.Send(new GetMenuRoutesQuery());
            var MenuRoutes = MenuRoute.MenusViewModel;
            ViewBag.MenuRoutes = new SelectList(MenuRoutes, "ID", "Controller");

            //var MenuType = await _mediatR.Send(new GetMenuTypesQuery());
            //var MT = MenuType.MenueTypes;
            //ViewBag.MT = new SelectList(MM, "ID", "Keyword");

            return View();
        }

        [HttpPost]
        public async Task<object> Create_Menu([FromForm] CreateMenuCommand model)
        {
            var MenuLocations = await _mediatR.Send(new GetMenuLocationsQuery());
            var ML = MenuLocations.MenusViewModel;
            ViewBag.ML = new SelectList(ML, "ID", "Name");


            var MainMenu = await _mediatR.Send(new GetMenusQuery());
            var MM = MainMenu.MenusViewModel;
            ViewBag.MM = new SelectList(MM, "ID", "Keyword");


            var MenuRoute = await _mediatR.Send(new GetMenuRoutesQuery());
            var MenuRoutes = MenuRoute.MenusViewModel;
            ViewBag.MenuRoutes = new SelectList(MenuRoutes, "ID", "Controller");

            if (ModelState.IsValid)
            { 
                var response = await _mediatR.Send(model);
                return View();
            }
                else
            {
                return View();
            }
         }












        //for updating of menue
        [HttpGet]
        public async Task<IActionResult> Edit_Menue(int id)
        {
            var MenueTypes = await _mediatR.Send(new GetMenuTypesQuery());
            var MT = MenueTypes.MenueTypes;
            ViewBag.MT = new SelectList(MT, "ID", "Name");
            var menue = await _mediatR.Send(new GetMenuByIDQuery { ID = id });
          
            return View(menue);
        }


        [HttpPost]
        public async Task<IActionResult> Update_Menue([FromForm] CreateMenuCommand model, int id)
        {


            model.ID = id;
            UpdateMenuCommand Command = new UpdateMenuCommand(model);

            await _mediatR.Send(Command);

            return RedirectToAction("Menues", "Settings");


        }





        // for deletion of Menue
        [HttpGet]
        public async Task<IActionResult> Delete_Menue(int id)
        {


            var response = await _mediatR.Send(new DeleteMenuCommand { ID = id });
            return RedirectToAction("Menues", "Settings");

        }
        // End: Menues



        [HttpGet]
        public IActionResult Create_MenuRoute()
        {

            return View();

        }

        [HttpGet]
        public async Task<IActionResult> MenuRoute()
        {

            var response = await _mediatR.Send(new GetMenuRoutesQuery());
            ViewBag.MenuRoutes = response.MenusViewModel;
            return View();

        }

        [HttpPost]
        public async Task<IActionResult> Create_MenuRoute([FromForm] CreateMenuRouteCommand model)
        {
            var response = await _mediatR.Send(model);

            return View();

        }


        [HttpGet]
        public async Task<IActionResult> MenuLocation()
        {

            var response = await _mediatR.Send(new GetMenuLocationsQuery());
            ViewBag.Locations = response.MenusViewModel;
            return View();

        }

        [HttpGet]
        public IActionResult Create_MenuLocation()
        {

            return View();

        }


        [HttpPost]
        public async Task<IActionResult> Create_MenuLocation([FromForm] CreateMenuLocationCommand model)
        {
            var response = await _mediatR.Send(model);

            return View();

        }



        public async Task<IActionResult> GetSubMenus(int id)
        {
            var MenuRoutesByID = await _mediatR.Send(new GetMenuRoutesByIDQuery { ID = id });
            var MenuRoutes = MenuRoutesByID.MenusViewModel;
            ViewBag.MenuRoutes = new SelectList(MenuRoutes, "ID", "Action");
            return Json(ViewBag.MenuRoutes);
        }
    }
}
