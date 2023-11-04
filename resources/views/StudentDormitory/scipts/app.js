let $ = document;
const chevron1 = $.querySelector("#chevron-1");
const chevron2 = $.querySelector("#chevron-2");
const chevron3 = $.querySelector("#chevron-3");
const chevron4 = $.querySelector("#chevron-4");

const dormitory = $.querySelector("#dormitory");
const dormitoryName = $.querySelector("#dormitory-name");

const floor = $.querySelector("#floor");
const floorName = $.querySelector("#floor-name");

const rooms = $.querySelector("#rooms");
const roomsNameOne = $.querySelector("#rooms-name-1");
const roomsNameTwo = $.querySelector("#rooms-name-2");

const Capacity = $.querySelector("#Capacity");
const CapacityName = $.querySelector("#Capacity-name");

const floorOne = $.querySelector("#floor-one");
const floorTwo = $.querySelector("#floor-two");

function openContent(title, titleName, classTitleName, chevron, chevronClass) {
  title.addEventListener("click", () => {
    titleName.classList.toggle(classTitleName);
    chevron.classList.toggle(chevronClass);
  });
}

openContent(
  dormitory,
  dormitoryName,
  "dormitory-content-active",
  chevron1,
  "chevron-left-active"
);
openContent(
  floor,
  floorName,
  "dormitory-content-active",
  chevron2,
  "chevron-left-active"
);
openContent(
  rooms,
  roomsNameOne,
  "dormitory-content-active",
  chevron3,
  "chevron-left-active"
);
openContent(
  Capacity,
  CapacityName,
  "dormitory-content-active",
  chevron4,
  "chevron-left-active"
);

