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
    public partial class frmNewBoat : Form
	{
		public frmNewBoat()
		{
			InitializeComponent();
		}

        // *** TODO Create a reference to a Product objects
        //          No product will exist yet, however.
        private Sailboat product = null;

		public Sailboat GetNewProduct()
		{
            // Display this form as modal, which means the user won't
            // beable to access the main form while this one is still open.
			this.ShowDialog();

            // Return a reference to a product instance to the calling statement
			return product;
		}

		private void btnSave_Click(object sender, EventArgs e)
		{
			if (IsValidData())
			{
                try
                {
                    // Create an instance of the Product class named product (lowercase)
                    // using its pramerized constructor method.
                    product = new Sailboat(txtCode.Text,
                        txtDescription.Text,Convert.ToInt32(txtNumOfSails.Text), Convert.ToDecimal(txtPrice.Text));

                    // Close this form
                    this.Close();
                }
                catch (Exception ex)
                {
                    MessageBox.Show("Exception " + ex.GetType().FullName + " thrown " +
                        "\n" + "Message: " + ex.Message);
                }
			}
		}

		private bool IsValidData()
		{
			return Validator.IsPresent(txtCode) &&
				   Validator.IsPresent(txtDescription) &&
                   Validator.IsPresent(txtNumOfSails) &&
                   Validator.IsInt32(txtNumOfSails) &&
				   Validator.IsPresent(txtPrice) &&
				   Validator.IsDecimal(txtPrice);
		}

		private void btnCancel_Click(object sender, EventArgs e)
		{
			this.Close();
		}

        private void txtCode_TextChanged(object sender, EventArgs e)
        {

        }
    }
}