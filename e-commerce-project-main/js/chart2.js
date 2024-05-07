const data = {
  labels: ["2022", "2023", "2024"],
  datasets: [
    {
      label: "incomes",
      data: [300, 50, 100],
      backgroundColor: [
        "rgb(255, 99, 132)",
        "rgb(54, 162, 235)",
        "rgb(255, 205, 86)",
      ],
      hoverOffset: 4,
    },
  ],
};

const ctx2 = document.getElementById("doughnut").getContext("2d");
const config = {
  type: "doughnut",
  data: data,
};

const doughnut = new Chart(ctx2, config);
