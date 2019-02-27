using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Windows.Forms;


namespace ProductMaintenance
{
    public partial class frmBoatMain : Form
	{
		public frmBoatMain()
		{
			InitializeComponent();
		}

        // *** TODO - Create a reference to a List<> of the Product class named sailboat
		private List<Sailboat> sailboat = null;

		private void frmProductMain_Load(object sender, EventArgs e)
		{
            // *** TODO - Call the GetProducts() method of the static ProductDB class and assign
            //            its return value to the sailboat list.
			sailboat = SailboatDB.GetProducts();

            // *** TODO - Call the FillProductsListBox() method
			FillProductListBox();

		}

        // *** TODO - Create the FillProductsListBox() void method. It should
        //            a) clear contents of the lstProducts listbox control, and
        //            b) use a foreach to iterate through the sailboat list (which is a collection)
        //               and display the string value returned form the Product GetDisplayText() method
        //               (The string value basically contains formmated product information.)
		private void FillProductListBox()
		{
			lstProducts.Items.Clear();

			foreach (Sailboat p in sailboat)
			{
				lstProducts.Items.Add(p.GetDisplayText("\t"));
			}
		}

		private void btnAdd_Click(object sender, EventArgs e)
		{
            // *** TODO - Instantiate a new instance of the frmNewProducts() form.
            frmNewBoat newProductForm = new frmNewBoat();

            // *** TODO - Instantiate a new Product object named product and assign it
            //            the return value of the newProductsForm's GetNewProduct() method.
            Sailboat product = newProductForm.GetNewProduct();

            // *** TODO - Check to see if the pervious statement returned a product.
            if (product != null)
			{
                // *** TODO - Use the Add method of the List<> collect to add the returned
                //            product to the list.
                sailboat.Add(product);

                // *** TODO - Execute the static SaveProducts() method of the ProductDB class,
                //            passing it the entire sailboat list.
                SailboatDB.SaveProducts(sailboat);

                // *** TODO - Call the function FillProductListBox();
                FillProductListBox();
			}
		}

		private void btnDelete_Click(object sender, EventArgs e)
		{
            // *** TODO - Determine the index of the selected product to delete
            int i = lstProducts.SelectedIndex;

            // *** TODO - Check that the user did select a product
            if (i != -1)
			{
                // *** TODO - Create a product object and assign it the element
                //            in the sailboat list that has the index value
                //            identified in the first TODO of this event handler.
                //            NOTE: The sailboat[] element will need to be cast 
                //            as a Product.
                Sailboat product = (Sailboat)sailboat[i];

				string message = "Are you sure you want to delete "
					+ product.OwnerName + "?";

                // *** TODO - Declare a DialogResult object named button and
                //            assign it the value returned from the MessageBox.Show()
                //            method. The MessageBox should display the value of the message
                //            (assigned in the previous statement) and a "Confirm Delete" caption,
                //            and display a Yes or a No button.
                DialogResult button =
					MessageBox.Show(message, "Confirm Delete",
					MessageBoxButtons.YesNo);

                // *** TODO - Check to see if the button variable contrains a DialogResult of Yes
                if (button == DialogResult.Yes)
				{
					sailboat.Remove(product);
					SailboatDB.SaveProducts(sailboat);
					FillProductListBox();
				}
			}
		}

        // Close this form
		private void btnExit_Click(object sender, EventArgs e)
		{
			this.Close();
		}
	}
}