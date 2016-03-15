using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace ConsoleApplication1
{
    struct Info_Student
    {
        public string name;
        public int group;
        public enum subject { Opr, Physics, Math };
        public int[] marks = new int[3];
        public Info_Student(string name, int group, int[] marks)
        {
            this.name = name;
            this.group = group;
            for (int i = 0; i < marks.Length; i++)
            {
                this.marks[i] = marks[i];
            }
        }

        public static void Find_Debts(Info_Student[] arr){
            for (int i = 0; i < arr.Length; i++)
            {
                if (arr[i].marks[0] < 3 || arr[i].marks[1] < 3 || arr[i].marks[2] < 3)
                {
                    Console.WriteLine("Name: {0}. Marks: Opr: {1}, Physics: {2}, Math: {3}", arr[i].name, arr[i].marks[0], arr[i].marks[1], arr[i].marks[3]);
                }
            } 
        }

        public static void stats(Info_Student[] arr)
        {
            int good = 0;
            for (int i = 0; i < arr.Length; i++)
            {
                if (arr[i].marks[0] > 3 || arr[i].marks[1] > 3 || arr[i].marks[2] > 3)
                {
                    good++;
                }
            }
            Console.Write((good / arr.Length) * 100);
        }

        public static void better(Info_Student[] arr)
        {
            int Sum_Phicis = 0;
            int Sum_Math = 0;
            int Sum_Opr = 0;
            for (int i = 0; i < arr.Length; i++)
            {
                Sum_Opr += arr[i].marks[(int)subject.Opr];
                Sum_Math+=arr[i].marks[(int)subject.Math];
                Sum_Phicis += arr[i].marks[(int)subject.Physics];
            }
            if (Sum_Opr > Sum_Phicis && Sum_Opr > Sum_Math)
            {
                Console.WriteLine("The best passed exem is OOP");
            }
            else
            {
                if (Sum_Phicis > Sum_Opr && Sum_Phicis > Sum_Math)
                {
                    Console.Write("The best passed exem is Phicis");
                }
                else
                {
                    if (Sum_Math > Sum_Opr && Sum_Math > Sum_Phicis)
                    {
                        Console.Write("The best passed exem is Math");
                    }
                }
            }
        }
        public static void ShowStats(Info_Student[] arr)
        {
            for (int i = 0; i < arr.Length; i++)
            {
                
            }
        }
    }
}
