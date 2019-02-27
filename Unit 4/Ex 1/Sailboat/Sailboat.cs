// *** TODO - Add this to support the Exception for Price that we're adding.
using System;

namespace ProductMaintenance
{
    public class Sailboat
	{

        // *** TODO - 
        // private string code;
        // private string description;
        private decimal price;

		public Sailboat() { }

		public Sailboat(string code, string ownerName, int numOfSails, decimal price)
		{
			this.Code = code;
			this.OwnerName = ownerName;
            this.NumOfSails = numOfSails;
			this.Price = price;
		}

		public string Code { get; set; }


		public string OwnerName { get; set; }

        public int NumOfSails { get; set; }
	

		public decimal Price
		{
			get { return price; }
			set
			{
                if (value < 5000)
                {
                    throw (new ArgumentOutOfRangeException("Boat Charge", value,
                        "Price cannot be below $5000.00."));
                }


				price = value;
			}
		}

        //public string GetDisplayText()
        //{
        //    return code + ", " + price.ToString("c") + ", " + description;

        //}

		public string GetDisplayText(string sep = "\t")
		{
			//return code + sep + price.ToString("c") + sep + description;
            if (sep == null)
                return Code + ", " + price.ToString("c") + ", " + OwnerName + ", " + NumOfSails;
            else
                return Code + sep + price.ToString("c") + sep + OwnerName + sep + NumOfSails;
		}
	}
}
